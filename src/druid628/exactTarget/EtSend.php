<?PHP

namespace druid628\exactTarget;


class EtSend extends EtBaseClass
{
    public $Email; // EtEmail
    public $List; // EtList
    public $SendDate; // dateTime
    public $FromAddress; // String
    public $FromName; // String
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
    public $Subject; // String
    public $PreviewURL; // String
    public $Links; // EtLink
    public $Events; // EtTrackingEvent
    public $SentDate; // dateTime
    public $EmailName; // String
    public $Status; // String
    public $IsMultipart; // boolean
    public $SendLimit; // int
    public $SendWindowOpen; // time
    public $SendWindowClose; // time
    public $IsAlwaysOn; // boolean
}
