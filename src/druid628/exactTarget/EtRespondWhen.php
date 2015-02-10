<?PHP

namespace druid628\exactTarget;


class EtRespondWhen extends EtBaseClass
{
    const Never                  = 'Never';
    const OnError                = 'OnError';
    const Always                 = 'Always';
    const OnConversationError    = 'OnConversationError';
    const OnConversationComplete = 'OnConversationComplete';
    const OnCallComplete         = 'OnCallComplete';
}
