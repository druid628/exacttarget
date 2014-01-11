<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtRecallResponseMsg extends EtBaseClass
{
    public $OverallStatus; // String
    public $RequestID; // String
    public $Results; // EtAPIObject
}

