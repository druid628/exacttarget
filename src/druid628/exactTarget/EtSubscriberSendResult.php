<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtSubscriberSendResult extends EtBaseClass
{
    public $Send; // EtSend
    public $Email; // EtEmail
    public $Subscriber; // EtSubscriber
    public $ClickDate; // dateTime
    public $BounceDate; // dateTime
    public $OpenDate; // dateTime
    public $SentDate; // dateTime
    public $LastAction; // String
    public $UnsubscribeDate; // dateTime
    public $FromAddress; // String
    public $FromName; // String
    public $TotalClicks; // int
    public $UniqueClicks; // int
    public $Subject; // String
    public $ViewSentEmailURL; // String
}

