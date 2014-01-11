<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtScheduleResponse extends EtBaseClass
{
    public $StatusCode; // String
    public $StatusMessage; // String
    public $OrdinalID; // int
    public $Results; // EtResults
    public $ErrorCode; // int
}

