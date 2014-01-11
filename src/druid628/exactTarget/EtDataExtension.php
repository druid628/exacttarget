<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtDataExtension extends EtBaseClass
{
    public $Name; // String
    public $Description; // String
    public $IsSendable; // boolean
    public $IsTestable; // boolean
    public $SendableDataExtensionField; // EtDataExtensionField
    public $SendableSubscriberField; // EtAttribute
    public $Template; // EtDataExtensionTemplate
    public $DataRetentionPeriodLength; // int
    public $DataRetentionPeriodUnitOfMeasure; // int
    public $RowBasedRetention; // boolean
    public $ResetRetentionPeriodOnImport; // boolean
    public $DeleteAtEndOfRetentionPeriod; // boolean
    public $RetainUntil; // String
    public $Fields; // EtFields
    public $DataRetentionPeriod; // EtDateTimeUnitOfMeasure
}
