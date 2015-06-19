<?PHP

namespace druid628\exactTarget;


class EtRespondWhen extends EtBaseClass
{
    const NEVER                    = 'Never';
    const ON_ERROR                 = 'OnError';
    const ALWAYS                   = 'Always';
    const ON_CONVERSATION_ERROR    = 'OnConversationError';
    const ON_CONVERSATION_COMPLETE = 'OnConversationComplete';
    const ON_CALL_COMPLETE         = 'OnCallComplete';
}
