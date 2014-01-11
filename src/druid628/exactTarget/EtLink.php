<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtLink extends EtBaseClass
{
    public $LastClicked; // dateTime
    public $Alias; // String
    public $TotalClicks; // int
    public $UniqueClicks; // int
    public $URL; // String
    public $Subscribers; // EtTrackingEvent
}

