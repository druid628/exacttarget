<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtComplexFilterPart extends EtBaseClass
{
    public $LeftOperand; // EtFilterPart
    public $LogicalOperator; // EtLogicalOperators
    public $RightOperand; // EtFilterPart
}

