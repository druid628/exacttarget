<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtCreateResult extends EtBaseClass
{
    public $NewID; // int
    public $NewObjectID; // String
    public $PartnerKey; // String
    public $Object; // EtAPIObject
    public $CreateResults; // EtCreateResult
    public $ParentPropertyName; // String
}
