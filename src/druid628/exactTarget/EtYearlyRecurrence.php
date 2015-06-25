<?PHP

namespace druid628\exactTarget;


class EtYearlyRecurrence extends EtBaseClass
{
    public $YearlyRecurrencePatternType; // EtYearlyRecurrencePatternTypeEnum
    public $ScheduledDay; // int
    public $ScheduledWeek; // EtWeekOfMonthEnum
    public $ScheduledMonth; // EtMonthOfYearEnum
    public $ScheduledDayOfWeek; // EtDayOfWeekEnum
}
