<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtTriggeredSendDefinition extends EtBaseClass
{
    public $CustomerKey; // String
    public $TriggeredSendType; // EtTriggeredSendTypeEnum
    public $TriggeredSendStatus; // EtTriggeredSendStatusEnum
    public $Email; // EtEmail
    public $List; // EtList
    public $AutoAddSubscribers; // boolean
    public $AutoUpdateSubscribers; // boolean
    public $BatchInterval; // int
    public $BccEmail; // String
    public $EmailSubject; // String
    public $DynamicEmailSubject; // String
    public $IsMultipart; // boolean
    public $IsWrapped; // boolean
    public $AllowedSlots; // short
    public $NewSlotTrigger; // int
    public $SendLimit; // int
    public $SendWindowOpen; // time
    public $SendWindowClose; // time
    public $SendWindowDelete; // boolean
    public $RefreshContent; // boolean
    public $ExclusionFilter; // String
    public $Priority; // String
    public $SendSourceCustomerKey; // String
    public $ExclusionListCollection; // EtTriggeredSendExclusionList
    public $CCEmail; // String
    public $SendSourceDataExtension; // EtDataExtension
    public $IsAlwaysOn; // boolean
}

