<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtAccount extends EtBaseClass
{
    public $AccountType; // EtAccountTypeEnum
    public $ParentID; // int
    public $BrandID; // int
    public $PrivateLabelID; // int
    public $ReportingParentID; // int
    public $Name; // String
    public $Email; // String
    public $FromName; // String
    public $BusinessName; // String
    public $Phone; // String
    public $Address; // String
    public $Fax; // String
    public $City; // String
    public $State; // String
    public $Zip; // String
    public $Country; // String
    public $IsActive; // int
    public $IsTestAccount; // boolean
    public $OrgID; // int
    public $DBID; // int
    public $ParentName; // String
    public $CustomerID; // long
    public $DeletedDate; // dateTime
    public $EditionID; // int
    public $Children; // EtAccountDataItem
    public $Subscription; // EtSubscription
    public $PrivateLabels; // EtPrivateLabel
    public $BusinessRules; // EtBusinessRule
    public $AccountUsers; // EtAccountUser
    public $InheritAddress; // boolean
}

