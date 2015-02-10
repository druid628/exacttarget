<?PHP

namespace druid628\exactTarget;


class EtSenderProfile extends EtBaseClass
{
    public $Name; // String
    public $Description; // String
    public $FromName; // String
    public $FromAddress; // String
    public $UseDefaultRMMRules; // boolean
    public $AutoForwardToEmailAddress; // String
    public $AutoForwardToName; // String
    public $DirectForward; // boolean
    public $AutoForwardTriggeredSend; // EtTriggeredSendDefinition
    public $AutoReply; // boolean
    public $AutoReplyTriggeredSend; // EtTriggeredSendDefinition
    public $SenderHeaderEmailAddress; // String
    public $SenderHeaderName; // String
    public $DataRetentionPeriodLength; // short
    public $DataRetentionPeriodUnitOfMeasure; // EtRecurrenceTypeEnum
}
