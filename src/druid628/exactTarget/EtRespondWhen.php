<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtRespondWhen extends EtBaseClass
{
    const NEVER                  = 'Never';
    const ONERROR                = 'OnError';
    const ALWAYS                 = 'Always';
    const ONCONVERSATIONERROR    = 'OnConversationError';
    const ONCONVERSATIONCOMPLETE = 'OnConversationComplete';
    const ONCALLCOMPLETE         = 'OnCallComplete';
}

