<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtListSend extends EtBaseClass
{
    public $SendID; // int
    public $List; // EtList
    public $Duplicates; // int
    public $InvalidAddresses; // int
    public $ExistingUndeliverables; // int
    public $ExistingUnsubscribes; // int
    public $HardBounces; // int
    public $SoftBounces; // int
    public $OtherBounces; // int
    public $ForwardedEmails; // int
    public $UniqueClicks; // int
    public $UniqueOpens; // int
    public $NumberSent; // int
    public $NumberDelivered; // int
    public $Unsubscribes; // int
    public $MissingAddresses; // int
    public $PreviewURL; // String
    public $Links; // EtLink
    public $Events; // EtTrackingEvent
}
