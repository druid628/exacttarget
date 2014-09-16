<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtAPIObject extends EtBaseClass
{

    /**
     * @param EtClientID $Client
     */
    public $Client; 

    /**
     * @param string $PartnerKey
     */
    public $PartnerKey; 

    /**
     * @param EtAPIProperty $PartnerProperties
     */
    public $PartnerProperties; 

    /**
     * @param DateTime $CreatedDate;
     */
    public $CreatedDate; 

    /**
     * @param DateTime $ModifiedDate
     */
    public $ModifiedDate; 

    /**
     * @param int $ID
     */
    public $ID; 

    /**
     * @param string $ObjectID
     */
    public $ObjectID; 

    /**
     * @param string $CustomerKey
     */
    public $CustomerKey; 

    /**
     * @param EtOwner $Owner
     */
    public $Owner; 

    /**
     * @param string $CorrelationID
     */
    public $CorrelationID;

}
