<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtScheduleRequestMsg extends EtBaseClass
{
    public $Options; // EtScheduleOptions
    public $Action; // String
    public $Schedule; // EtScheduleDefinition
    public $Interactions; // EtInteractions
}

