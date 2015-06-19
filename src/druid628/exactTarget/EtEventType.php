<?PHP

namespace druid628\exactTarget;


class EtEventType extends EtBaseClass
{

    const OPEN                    = 'Open';
    const CLICK                   = 'Click';
    const HARD_BOUNCE             = 'HardBounce';
    const SOFT_BOUNCE             = 'SoftBounce';
    const OTHER_BOUNCE            = 'OtherBounce';
    const UNSUBSCRIBE             = 'Unsubscribe';
    const SENT                    = 'Sent';
    const NOT_SENT                = 'NotSent';
    const SURVEY                  = 'Survey';
    const FORWARDED_EMAIL         = 'ForwardedEmail';
    const FORWARDED_EMAIL_OPT_IN  = 'ForwardedEmailOptIn';
}
