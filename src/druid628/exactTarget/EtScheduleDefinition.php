<?PHP

namespace druid628\exactTarget;


class EtScheduleDefinition extends EtBaseClass
{
    public $Name; // String
    public $Description; // String
    public $Recurrence; // EtRecurrence
    public $RecurrenceType; // EtRecurrenceTypeEnum
    public $RecurrenceRangeType; // EtRecurrenceRangeTypeEnum
    public $StartDateTime; // dateTime
    public $EndDateTime; // dateTime
    public $Occurrences; // int
    public $Keyword; // String
}
