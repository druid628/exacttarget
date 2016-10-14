<?PHP

namespace druid628\exactTarget;

use SoapFault;
use druid628\exactTarget\Exception\EtSoapException;
use druid628\exactTarget\Exception\EtClassNotFoundException;
use druid628\exactTarget\Exception\EtMethodNotFoundException;

/**
 * EtClient - ExactTarget SOAP client
 *
 * @property const        PRODWSDL
 * @property const        SOAPWSDL
*
 * @property EtSoapClient $client
 * @property string       $serverInstance
 * @property string       $wsdl
 * @property array        $validSendTypes
 *
 * @package exactTarget
 * @author  Micah Breedlove <druid628@gmail.com> <micah.breedlove@blueshamrock.com>
 * @version 1.0
 */
class EtClient extends EtBaseClass
{
    // Exact Target API WSDL
    const SOAPWSDL = "http://exacttarget.com/wsdl/partnerAPI";

    /** @var \druid628\exactTarget\EtSoapClient $client */
    protected $client;

    /** @var  string $serverInstance */
    protected $serverInstance;

    /** @var  string */
    protected $wsdl;

    /** @var array $validSendTypes */
    protected $validSendTypes = array(
        "SMSTriggeredSend",
        "Send",
        "TriggeredSend",
    );

    /** @var array $eventProperties */
    private $eventProperties = array(
        'sent'             => array('ListID', 'SubscriberID', 'EventDate', 'EventType', 'SubscriberKey', 'SendID'),
        'open'             => array('EventDate', 'EventType', 'SubscriberKey', 'SendID'),
        'click'            => array('EventDate', 'EventType', 'SubscriberKey', 'SendID'),
        'unsub'            => array('EventDate', 'EventType', 'SubscriberKey', 'SendID'),
        'subscriberstatus' => array(
            'Client.ID',
            'SubscriberID',
            'SubscriberKey',
            'ReasonUnsub',
            'CurrentStatus',
            'PreviousStatus',
            'CreatedDate',
        ),
    );

    /**
     * Build An authenticated SoapClient for use with Exact Target
     *
     * @param String $username       Exact Target username
     * @param String $password       Exact Target password
     * @param String $serverInstance Exact Target Server/Instance (e.g. ""; "s4"; "s6")
     *
     */
    public function __construct($username, $password, $serverInstance = '')
    {
        $this->setServer($serverInstance);

        $this->client           = new EtSoapClient($this->wsdl, array('trace' => 1));
        $this->client->username = $username;
        $this->client->password = $password;
    }

    public function setServer($serverInstance = '')
    {
        $this->serverInstance = $serverInstance;

        $this->serverInstance = $serverInstance;
        if ($serverInstance != '') {
            $serverInstance .= ".";
        }

        $this->wsdl = "https://webservice.".$serverInstance."exacttarget.com/etframework.wsdl";
    }

    /**
     * What server am I connected to?
     *
     * @return String (e.g. ""; "s4"; "s6")
     */
    public function getServer()
    {
        return $this->serverInstance;
    }

    /**
     * Used to call create, recall, update functions
     * executed this way to for further growth of the class.
     *
     * @param string $method
     * @param array  $arguments
     *
     * @return mixed
     *
     * @throws Exception\EtClassNotFoundException
     * @throws Exception\EtMethodNotFoundException
     */
    public function __call($method, $arguments)
    {
        $verb = substr($method, 0, 6);
        if (in_array($verb, array('create', 'recall', 'update', 'bundle'))) {
            $className = substr($method, 6);
        } else {
            parent::__call($method, $arguments);
        }

        if (method_exists($this, $verb)) {
            $className = sprintf("Et%s", $className);
            if (class_exists(sprintf(__NAMESPACE__."\%s", $className))) {
                return call_user_func_array(array($this, $verb), array_merge(array($className), $arguments));
            }

            throw new EtClassNotFoundException("Class ($className) Not Found");
        }

        throw new EtMethodNotFoundException("No Method ($method) exists on EtClient");
    }

    /**
     * Generic Create function to call ET-Create Request
     *
     * @param array $userData
     *
     * @return mixed | Object if successful boolean false if unsuccessful
     */
    public function create($class, $userData)
    {
        if (!is_array($userData)) {
            return false;
        }

        $nsClass           = __NAMESPACE__."\\".$class;
        $sub               = new $nsClass();
        $propertiesOfClass = array_keys(get_object_vars($sub));
        foreach ($propertiesOfClass as $prop) {
            if (array_key_exists($prop, $userData)) {
                $sub->set($prop, $userData[$prop]);
            }
        }

        $object = new \SoapVar($sub, SOAP_ENC_OBJECT, substr($class, 2), self::SOAPWSDL);

        $request          = new EtCreateRequest();
        $request->Options = null;
        $request->Objects = array($object);
        $results          = $this->client->Create($request);

        if ($results->OverallStatus == "OK") {
            return $sub;
        }

        return false;
    }

    /**
     * Generic get/retrieve (recall - I needed a 6 letter word for get) function to call ET-Retrieve Request
     *
     * @param Et[mixed]    $class
     * @param EtFilterPart $filter (can be a EtSimpleFilterPart, EtComplexFilterPart, or EtTagFilterPart).
     *
     * @return mixed | Object if successful boolean false if unsuccessful
     */
    public function recall($class, $filter = null, $properties = null, $classNameOverride = null)
    {
        $className = $classNameOverride ?: substr($class, 2);

        $request = new EtRecallRequest();
        $request->ObjectType = $className;
        if (!is_null($properties)) {
            $request->Properties = $properties;
        } else {
            $request->Properties = $this->getDefinitionOfObject($className);
        }
        $request->Filter = self::soapCall($filter);

        $requestMsg                  = new EtRecallRequestMsg();
        $requestMsg->RetrieveRequest = $request;
        $results                     = $this->client->Retrieve($requestMsg);
        $nsClass                     = __NAMESPACE__."\\".$class;

        if (isset($results->Results)) {
            if (is_array($results->Results)) {
                $recalledClasses = array();
                foreach ($results->Results as $result) {
                    $recalledClasses[] = $this->cast($result, new $nsClass($this), $this);
                }

                return $recalledClasses;
            } else {
                $recalledClass = $this->cast($results->Results, new $nsClass($this), $this);

                return $recalledClass;
            }
        }

        return false;
    }

    /**
     *
     * @param string $objectType
     *
     * @return array
     */
    public function getDefinitionOfObject($objectType)
    {
        $lstProps = array();
        try {
            $request             = new EtObjectDefinitionRequest();
            $request->ObjectType = $objectType;

            $defRqstMsg                     = new EtDefinitionRequestMsg();
            $defRqstMsg->DescribeRequests[] = new \SoapVar($request, SOAP_ENC_OBJECT, 'ObjectDefinitionRequest', self::SOAPWSDL);

            /* Call the Retrieve method passing the instantiated ExactTarget_RetrieveRequestMsg object */
            $status  = $this->client->Describe($defRqstMsg);

            $results = $status->ObjectDefinition;

            if (count($results->Properties) > 0) {
                $properties = $results->Properties;
                foreach ($properties as $letter) {
                    if ($letter->IsRetrievable === true) {
                        $lstProps[] = $letter->Name;
                    }
                }
            }

            return $lstProps;
        } catch (SoapFault $fault) {
            throw new EtSoapException($fault);
        }
    }

    /**
     * Generic Update function to call ET-Update Request
     *
     * @param string    $class
     * @param <T>object $activeClass
     * @param string    $updateType
     *
     * @return <classOfT> $activeClass
     */
    public function update($class, $activeClass, $updateType = "UPDATEADD")
    {
        $nsClass = __NAMESPACE__."\\".$class;
        if (!($activeClass instanceof $nsClass)) {
            throw new \Exception(" UPDATE Failed! (Error Code: #DR4T) -   Update expect Class $class but was given ".get_class(
                $activeClass
            ).".  Update Cannot update given object");
        }
        $className = substr($class, 2);

        $object = new \SoapVar($activeClass, SOAP_ENC_OBJECT, $className, self::SOAPWSDL);

        $request                       = new EtUpdateRequest();
        $requestOptions                = new EtUpdateOptions();
        $saveOption                    = new EtSaveOption();
        $saveOption->PropertyName      = $className;
        $saveOption->SaveAction        = constant("\\druid628\\exactTarget\\EtSaveAction::SAVE_".strtoupper($updateType));
        $requestOptions->SaveOptions[] = new \SoapVar($saveOption, SOAP_ENC_OBJECT, "SaveOption", self::SOAPWSDL);
        $request->Options              = new \SoapVar($requestOptions, SOAP_ENC_OBJECT, "UpdateOptions", self::SOAPWSDL);
        $request->Objects              = array($object);

        $results = $this->client->Update($request);

        if ($results->OverallStatus != 'OK') {
            throw new EtSoapException($results->Results->ErrorMessage, $results->Results->ErrorCode);
        }

        $updatedClass = $this->cast($results->Results->Object, new $nsClass($this), $this);

        return $updatedClass;
    }

    /**
     * Bundle -  Batch update method which will call ET-Update Request.
     * Used to add many subscribers, etc.
     *
     * @author Matt Rathbun <matt.rathbun@iostudio.com>
     *
     * @param string $class
     * @param array  $activeClasses Array of things to update in ET.
     * @param string $updateType    Defaults to upsert style
     *
     * @return boolean|array
     */
    public function bundle($class, $activeClasses, $updateType = "UPDATEADD")
    {
        if (!is_array($activeClasses)) {
            throw new \Exception('Bundle Failed! Bundle expects an array to be passed');
        }

        $nsClass   = __NAMESPACE__."\\".$class;
        $className = substr($class, 2);
        $objects   = array_map(
            function ($activeClass) use ($nsClass, $class, $className) {
                if (!($activeClass instanceof $nsClass)) {
                    throw new \Exception("Bundle Failed! Bundle expects Class $class but was given ".get_class(
                        $activeClass
                    ).".");
                }

                return new \SoapVar($activeClass,
                    SOAP_ENC_OBJECT,
                    $className,
                    \druid628\exactTarget\EtClient::SOAPWSDL);
            },
            $activeClasses
        );

        $saveOption                    = new \druid628\exactTarget\EtSaveOption();
        $saveOption->PropertyName      = $className;
        $saveOption->SaveAction        = constant("\\druid628\\exactTarget\\EtSaveAction::SAVE_".strtoupper($updateType));
        $requestOptions                = new \druid628\exactTarget\EtCreateOptions();
        $requestOptions->SaveOptions[] = new \SoapVar($saveOption, SOAP_ENC_OBJECT, "SaveOption", self::SOAPWSDL);
        $request                       = new \druid628\exactTarget\EtCreateRequest();
        $request->Options              = new \SoapVar($requestOptions, SOAP_ENC_OBJECT, "CreateOptions", self::SOAPWSDL);
        $request->Objects              = $objects;
        $results                       = $this->client->Create($request);

        if (($results->OverallStatus == 'OK'
                || $results->OverallStatus == 'Has Errors')
            && isset($results->Results)
        ) {
            // $results->Results can be an array if many objects are sent or
            // a stdClass object if only one object is sent.
            if (is_array($results->Results)) {
                $self = $this;

                return array_map(
                    function (\stdClass $object) use ($nsClass, $self) {
                        $newObject = $self->cast($object->Object, new $nsClass());
                        if (isset($object->StatusCode)) {
                            $newObject->StatusCode = $object->StatusCode;
                        }
                        if (isset($object->StatusMessage)) {
                            $newObject->StatusMessage = $object->StatusMessage;
                        }
                        if (isset($object->ErrorCode)) {
                            $newObject->ErrorCode = $object->ErrorCode;
                        }

                        return $newObject;
                    },
                    $results->Results
                );
            }

            $newObject                = $this->cast($results->Results->Object, new $nsClass());
            $newObject->StatusCode    = $results->Results->StatusCode;
            $newObject->StatusMessage = $results->Results->StatusMessage;
            $newObject->OrdinalID     = $results->Results->OrdinalID;
            $newObject->NewID         = $results->Results->NewID;

            return array($newObject);
        }

        return false;
    }

    /**
     * buildTriggeredSend object
     *
     * @param string $triggeredSendKey
     * @param array  $options
     *
     * @return EtTriggeredSend
     */
    public function buildTriggeredSend($triggeredSendKey, $options = array())
    {
        $tsd = new EtTriggeredSendDefinition();
        $tsd->setCustomerKey($triggeredSendKey);
        if (!empty($options)) {
            foreach ($options as $key => $value) {
                $tsd->set($key, $value);
            }
        }

        $ts = new EtTriggeredSend($this);
        $ts->setTriggeredSendDefinition(new \SoapVar($tsd, SOAP_ENC_OBJECT, "TriggeredSendDefinition", self::SOAPWSDL));

        // return the triggeredSend to allow you to add subscribers or whatever you need to do
        return $ts;
    }

    /**
     * Executes send
     *
     * @param mixed  $email
     * @param string $sendType - <classOf> $email  Known Valid Send types:  "TriggeredSend","SMSTriggeredSend","Send"
     *
     * @return boolean
     */
    public function sendEmail($email, $sendType)
    {
        $object = new \SoapVar($email, SOAP_ENC_OBJECT, $sendType, self::SOAPWSDL);

        $soapRequest = new EtCreateRequest();
        $soapRequest->setOptions(null);
        $soapRequest->setObjects(array($object));

        // executes Send
        $results = $this->client->Create($soapRequest);

        if ($results->OverallStatus == "OK") {
            return true;
        }

        return false;
    }

    /**
     * Used to query event-data from Exact Target
     *
     * @param String $eventType
     * @param array  $filter
     *
     * @return mixed - boolean false if an error exists array if successful
     */
    public function simpleQuery($eventType, $filter)
    {
        if (!in_array(strtolower($eventType), array_keys($this->eventProperties)) || !is_array($filter)) {
            return false;
        }
        if (!isset($filter['operator'])) {
            $filter['operator'] = EtSimpleOperators::EQUALS;
        }

        $event = new EtRecallRequest();
        $event->setObjectType($eventType.'Event');
        $event->setProperties($this->eventProperties[strtolower($eventType)]);
        $event_sfp                 = new EtSimpleFilterPart();
        $event_sfp->Value          = array($filter['value']);
        $event_sfp->SimpleOperator = $filter['operator'];
        $event_sfp->Property       = $filter['key'];
        $event->Filter             = $this->soapCall($event_sfp);
        $event->Options            = null;

        $event_msg = new EtRecallRequestMsg();
        $event_msg->setRecallRequest($event);
        $event_result = $this->client->Retrieve($event_msg);
        if ($event_result->OverallStatus == 'OK') {
            return $event_result->Results;
        }
    }

    /**
     * Used for soapCalls outside of EtClient. EtClient methods should be updated to use this function
     *
     * @param Et-(mixed) $object Object to Send
     *
     * @return \SoapVar
     */
    public function soapCall($object)
    {
        // Fix to avoid "Only variables can be passed by reference" error.
        $arr       = explode('\\', get_class($object));
        $classType = substr(end($arr), 2);

        $soap = new \SoapVar($object, SOAP_ENC_OBJECT, $classType, self::SOAPWSDL);

        return $soap;
    }
}
