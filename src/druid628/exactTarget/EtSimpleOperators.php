<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtSimpleOperators extends EtBaseClass
{
    const EQUALS             = 'equals';
    const NOTEQUALS          = 'notEquals';
    const GREATERTHAN        = 'greaterThan';
    const LESSTHAN           = 'lessThan';
    const ISNULL             = 'isNull';
    const ISNOTNULL          = 'isNotNull';
    const GREATERTHANOREQUAL = 'greaterThanOrEqual';
    const LESSTHANOREQUAL    = 'lessThanOrEqual';
    const BETWEEN            = 'between';
    const IN                 = 'IN';
    const LIKE               = 'like';
}


