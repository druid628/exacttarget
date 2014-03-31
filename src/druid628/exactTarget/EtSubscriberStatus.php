<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtSubscriberStatus extends EtBaseClass
{
    const ACTIVE       = 'Active';
    const BOUNCED      = 'Bounced';
    const HELD         = 'Held';
    const UNSUBSCRIBED = 'Unsubscribed';
    const DELETED      = 'Deleted';
}

