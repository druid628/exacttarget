<?PHP

namespace druid628\exactTarget;


class EtEventType extends EtBaseClass
{
    const Open                = 'Open';
    const Click               = 'Click';
    const HardBounce          = 'HardBounce';
    const SoftBounce          = 'SoftBounce';
    const OtherBounce         = 'OtherBounce';
    const Unsubscribe         = 'Unsubscribe';
    const Sent                = 'Sent';
    const NotSent             = 'NotSent';
    const Survey              = 'Survey';
    const ForwardedEmail      = 'ForwardedEmail';
    const ForwardedEmailOptIn = 'ForwardedEmailOptIn';
}
