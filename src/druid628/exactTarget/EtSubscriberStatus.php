<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtSubscriberStatus extends EtBaseClass
{
    const Active       = 'Active';
    const Bounced      = 'Bounced';
    const Held         = 'Held';
    const Unsubscribed = 'Unsubscribed';
    const Deleted      = 'Deleted';
}

