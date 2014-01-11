<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtBounceEvent extends EtBaseClass
{
    public $SMTPCode; // String
    public $BounceCategory; // String
    public $SMTPReason; // String
    public $BounceType; // String
}

