<?php

namespace druid628\exactTarget;


class EtAsyncResponse extends EtBaseClass
{
    public $ResponseType; // EtAsyncResponseType
    public $ResponseAddress; // String
    public $RespondWhen; // EtRespondWhen
    public $IncludeResults; // boolean
    public $IncludeObjects; // boolean
    public $OnlyIncludeBase; // boolean
}
