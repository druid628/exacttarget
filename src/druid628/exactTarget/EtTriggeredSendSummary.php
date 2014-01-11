<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtTriggeredSendSummary extends EtBaseClass
{
    public $TriggeredSendDefinition; // EtTriggeredSendDefinition
    public $Sent; // long
    public $NotSentDueToOptOut; // long
    public $NotSentDueToUndeliverable; // long
    public $Bounces; // long
    public $Opens; // long
    public $Clicks; // long
    public $UniqueOpens; // long
    public $UniqueClicks; // long
    public $OptOuts; // long
    public $SurveyResponses; // long
    public $FTAFRequests; // long
    public $FTAFEmailsSent; // long
    public $FTAFOptIns; // long
    public $Conversions; // long
    public $UniqueConversions; // long
    public $InProcess; // long
    public $NotSentDueToError; // long
}

