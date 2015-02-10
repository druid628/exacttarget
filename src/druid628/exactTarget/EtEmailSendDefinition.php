<?PHP

namespace druid628\exactTarget;


class EtEmailSendDefinition extends EtBaseClass
{
    public $SendDefinitionList; // EtSendDefinitionList
    public $Email; // EtEmail
    public $BccEmail; // String
    public $AutoBccEmail; // String
    public $TestEmailAddr; // String
    public $EmailSubject; // String
    public $DynamicEmailSubject; // String
    public $IsMultipart; // boolean
    public $IsWrapped; // boolean
    public $SendLimit; // int
    public $SendWindowOpen; // time
    public $SendWindowClose; // time
    public $SendWindowDelete; // boolean
    public $DeduplicateByEmail; // boolean
    public $ExclusionFilter; // String
    public $TrackingUsers; // EtTrackingUsers
    public $Additional; // String
    public $CCEmail; // String
}
