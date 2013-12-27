<?PHP

namespace joesexton00\exactTarget;

use joesexton00\exactTarget\EtBaseClass;
use joesexton00\exactTarget\EtClient;

/**
* EtDataExtensionWrapper
*
* @package  exactTarget
* @author   Joe Sexton <joe.sexton@bigideas.com>
* @version  1.0
*/
class EtDataExtensionWrapper extends EtBaseClass {

	/**
	 * @var EtClient
	 */
	protected $client;

	/**
	 * @var boolean
	 */
	protected $new = true;

	/**
	 * @var EtSimpleFilterPart
	 */
	protected $primaryKeyFilter = null;

	/**
	 * @var EtAPIProperty
	 */
	protected $primaryKeyAPIProperty = null;

	/**
	 * external key
	 * @var string
	 */
	public $CustomerKey;

	/**
	 * array of EtAPIProperty
	 * @var array
	 */
	public $Properties;

	/**
	 * array of EtAPIProperty
	 * @var array
	 */
	public $Keys;

	/**
	 * constructor
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @param   EtClient $EtClient
	 */
	public function __construct( $EtClient = null ) {

		$this->client = $EtClient;

		$this->init();
	}

	/**
	 * setClient
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @param   EtClient $EtClient
	 */
	public function setClient( EtClient $EtClient ) {

		$this->client = $EtClient;
	}

	/**
	 * getClient
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @return  EtClient
	 */
	public function getClient() {

		return $this->client;
	}

	/**
	 * add primaryKey
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @param   string $name
	 * @param   string $value
	 * @return  boolean
	 */
	public function addPrimaryKey( $name, $value ) {

	    if ( empty( $name ) || empty( $value ) )
			return false;

		$filter                 = new EtSimpleFilterPart();
		$filter->Property       = $name;
		$filter->SimpleOperator = constant( __NAMESPACE__."\EtSimpleOperators::EQUALS" );
		$filter->Value          = $value;
		$this->primaryKeyFilter = new \SoapVar( $filter, SOAP_ENC_OBJECT, 'SimpleFilterPart', "http://exacttarget.com/wsdl/partnerAPI");

		$this->primaryKeyAPIProperty        = new EtAPIProperty();
		$this->primaryKeyAPIProperty->Name  = $name;
		$this->primaryKeyAPIProperty->Value = $value;

		return true;
	}

	/**
	 * set CustomerKey
	 *
	 * @author 	Joe Sexton <joe.sexton@bigideas.com>
	 * @param 	string $CustomerKey
	 */
	public function setCustomerKey( $CustomerKey ) {

	    $this->CustomerKey = $CustomerKey;
	}

	/**
	 * find
	 * updates all current properties with the values in XT,
	 * if updating properties, add them after using find()
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @param   array $fields
	 * @return  boolean
	 * @throws  EtErrorException
	 */
	public function find( $fields = array() ) {

		if ( empty( $this->primaryKeyFilter ) )
			return false;

		$request = new EtRecallRequest();
		$request->ObjectType = "DataExtensionObject[$this->CustomerKey]";
		$request->Properties = $fields;
		$request->Filter = $this->primaryKeyFilter;

		// retrieve the data
		$requestMsg = new EtRecallRequestMsg();
		$requestMsg->RetrieveRequest = $request;

		$results = $this->client->getClient()->Retrieve( $requestMsg );

		// @todo test this
		if ( $results->OverallStatus !== "OK" ) {

			$up = new EtErrorException();
			$up->setRequest( $request );
			$up->setResults( $results );

			throw $up;
		}

		// fields set?
		if ( !empty( $results->Results )  && !empty( $results->Results->Properties )  && !empty( $results->Results->Properties->Property ) ) {

			// populate properties with ETAPIProperty
			foreach ( $results->Results->Properties->Property as $property ) {

				// we could also just cast and push to Properties, but updateProperty() will
				// search current properties and simply update the value without duplicating
				$this->updateProperty( $property->Name, $property->Value );
			}

			$this->new = false;
		}

		return true;
	}

	/**
	 * save
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @return  boolean
	 * @throws  EtErrorException
	 */
	public function save() {

		if ( empty( $this->primaryKeyAPIProperty ) )
			return false;

		$dataExt = new EtDataExtensionObject();
		$dataExt->CustomerKey = $this->CustomerKey;
		$dataExt->Properties = $this->Properties;

		// primary key is treated a little differently for inserts and updates, go figure...
		if ( $this->isNew() ) {
			$dataExt->Properties[] = $this->primaryKeyAPIProperty;
		} else {
			$dataExt->Keys[] = $this->primaryKeyAPIProperty;
		}

		if ( $this->isNew() ) {
			$request = new EtCreateRequest();
		} else {
			$request = new EtUpdateRequest();
		}

		$request->Options = NULL;
		$request->Objects[] = new \SoapVar( $dataExt, SOAP_ENC_OBJECT, 'DataExtensionObject', "http://exacttarget.com/wsdl/partnerAPI" );

		if ( $this->isNew() ) {
			$results = $this->client->getClient()->Create( $request );
		} else {
			$results = $this->client->getClient()->Update( $request );
		}

		if ( $results->OverallStatus !== "OK" ) {

			$up = new EtErrorException();
			$up->setRequest( $request );
			$up->setResults( $results );

			throw $up;
		}

		return true;
	}

	/**
	 * delete
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @return  boolean
	 */
	public function delete() {

		$primaryKeyProperty = $this->_createPrimaryKeyAPIProperty();
		if ( empty( $primaryKeyProperty ) )
			return false;

		$dataExt = new EtDataExtensionObject();
		$dataExt->CustomerKey = $this->CustomerKey;
		$dataExt->Keys = array( $primaryKeyProperty );

		$request = new EtDeleteRequest();
		$request->Options = NULL;
		$request->Objects[] = new \SoapVar( $dataExt, SOAP_ENC_OBJECT, 'DataExtensionObject', "http://exacttarget.com/wsdl/partnerAPI" );

		$results = $this->client->getClient()->Delete( $request );

		if ( $results->OverallStatus !== "OK" ) {

			$up = new EtErrorException();
			$up->setRequest( $request );
			$up->setResults( $results );

			throw $up;
		}

		return true;
	}

	/**
	 * createPrimaryKeyFilter
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @return  EtSimpleFilterPart | null
	 */
	protected function _createPrimaryKeyFilter() {

		if ( empty( $this->primaryKeySlug ) || empty( $this->primaryKey ) )
			return null;

		$filter = new EtSimpleFilterPart();
		$filter->Property = $this->primaryKeySlug;
		$filter->SimpleOperator = constant( __NAMESPACE__."\EtSimpleOperators::EQUALS" );
		$filter->Value = $this->primaryKey;

		return new \SoapVar( $filter, SOAP_ENC_OBJECT, "SimpleFilterPart",  EtClient::SOAPWSDL );
	}

	/**
	 * createPrimaryKeyAPIProperty
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @return  EtAPIProperty | null
	 */
	protected function _createPrimaryKeyAPIProperty() {

		if ( empty( $this->primaryKeySlug ) || empty( $this->primaryKey ) ) {

			return null;

		} else {
			$property = new EtAPIProperty();
			$property->Name = $this->primaryKeySlug;
			$property->Value = $this->primaryKey;

			return $property;
		}
	}

	/**
	 * updateProperty
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @param   string $name
	 * @param   string $value
	 * @return  boolean
	 */
	public function updateProperty( $name, $value ) {

		$isCurrentProperty = false;

		if ( empty( $value ) )
			$value = null;

		// check current properties for a match
		foreach ( $this->Properties as &$currentProperty ) {

			if ( $currentProperty->Name == $name ) {

				$currentProperty->Value = $value;
				$isCurrentProperty = true;
			}
		}

		// create new property if not a current property
		if ( ! $isCurrentProperty ) {

			$property = new EtAPIProperty();
			$property->Name = $name;
			$property->Value = $value;

			$this->Properties[] = $property;
		}

		return true;
	}

	/**
	 * getPropertyValue
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @param   string $name
	 * @return  string | null
	 */
	public function getPropertyValue( $name ) {

		foreach ( $this->Properties as $property ) {

			if ( $property->Name == $name ) {

				return $property->Value;
			}
		}

		return null;
	}

	/**
	 * getPropertiesAsArray
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @return  array
	 */
	public function getPropertiesAsArray() {

		$properties = array();

		foreach ( $this->Properties as $property ) {

			if ( $property instanceof EtAPIProperty ) {

				$properties[$property->Name] = $property->Value;
			}
		}

		return $properties;
	}

	/**
	 * init
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 */
	public function init() {

		$this->new                   = true;
		$this->primaryKeyFilter      = null;
		$this->primaryKeyAPIProperty = null;
		$this->CustomerKey           = null;
		$this->Properties            = array();
		$this->Keys                  = null;
	}

	/**
	 * clearProperties
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 */
	public function clearProperties() {

		$this->Properties = array();
	}

	/**
	 * isNew
	 *
	 * @author  Joe Sexton <joe.sexton@bigideas.com>
	 * @return  boolean
	 */
	public function isNew() {

		return $this->new;
	}

}
