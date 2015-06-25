<?php

namespace druid628\exactTarget;


class EtResultItem extends EtBaseClass
{
    public $RequestID; // String
    public $ConversationID; // String
    public $StatusCode; // String
    public $StatusMessage; // String
    public $OrdinalID; // int
    public $ErrorCode; // int
    public $RequestType; // EtRequestType
    public $RequestObjectType; // String
}
