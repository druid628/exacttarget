<?PHP

namespace druid628\exactTarget;


class EtMonthlyRecurrence extends EtBaseClass
{
    public $MonthlyRecurrencePatternType; // EtMonthlyRecurrencePatternTypeEnum
    public $MonthlyInterval; // int
    public $ScheduledDay; // int
    public $ScheduledWeek; // EtWeekOfMonthEnum
    public $ScheduledDayOfWeek; // EtDayOfWeekEnum
}
