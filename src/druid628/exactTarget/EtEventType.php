<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtEventType extends EtBaseClass
{
    const OPEN                = 'Open';
    const CLICK               = 'Click';
    const HARDBOUNCE          = 'HardBounce';
    const SOFTBOUNCE          = 'SoftBounce';
    const OTHERBOUNCE         = 'OtherBounce';
    const UNSUBSCRIBE         = 'Unsubscribe';
    const SENT                = 'Sent';
    const NOTSENT             = 'NotSent';
    const SURVEY              = 'Survey';
    const FORWARDEDEMAIL      = 'ForwardedEmail';
    const FORWARDEDEMAILOPTIN = 'ForwardedEmailOptIn';
}

