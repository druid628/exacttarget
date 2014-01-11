<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtAPIObject extends EtBaseClass
{
    public $Client; // EtClientID
    public $PartnerKey; // String
    public $PartnerProperties; // EtAPIProperty
    public $CreatedDate; // dateTime
    public $ModifiedDate; // dateTime
    public $ID; // int
    public $ObjectID; // String
    public $CustomerKey; // String
    public $Owner; // EtOwner
    public $CorrelationID; // String
}