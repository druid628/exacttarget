<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtMonthlyRecurrence extends EtBaseClass
{
    public $MonthlyRecurrencePatternType; // EtMonthlyRecurrencePatternTypeEnum
    public $MonthlyInterval; // int
    public $ScheduledDay; // int
    public $ScheduledWeek; // EtWeekOfMonthEnum
    public $ScheduledDayOfWeek; // EtDayOfWeekEnum
}

