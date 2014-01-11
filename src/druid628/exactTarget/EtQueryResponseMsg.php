<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtQueryResponseMsg extends EtBaseClass
{
    public $OverallStatus; // String
    public $RequestID; // String
    public $Results; // EtAPIObject
}
