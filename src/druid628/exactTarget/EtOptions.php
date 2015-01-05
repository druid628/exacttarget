<?php

namespace druid628\exactTarget;


class EtOptions extends EtBaseClass
{
    public $Client; // EtClientID
    public $SendResponseTo; // EtAsyncResponse
    public $SaveOptions; // EtSaveOptions
    public $Priority; // byte
    public $ConversationID; // String
    public $SequenceCode; // int
    public $CallsInConversation; // int
    public $ScheduledTime; // dateTime
    public $RequestType; // EtRequestType
    public $QueuePriority; // EtPriority
}
