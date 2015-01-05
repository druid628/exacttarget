<?PHP

namespace druid628\exactTarget;


class EtResultMessage extends EtBaseClass
{
    public $RequestID; // String
    public $ConversationID; // String
    public $OverallStatusCode; // String
    public $StatusCode; // String
    public $StatusMessage; // String
    public $ErrorCode; // int
    public $RequestType; // EtRequestType
    public $ResultType; // String
    public $ResultDetailXML; // String
    public $SequenceCode; // int
    public $CallsInConversation; // int
}
