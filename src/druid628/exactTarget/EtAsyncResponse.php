<?php

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtAsyncResponse extends EtBaseClass
{
    public $ResponseType; // EtAsyncResponseType
    public $ResponseAddress; // String
    public $RespondWhen; // EtRespondWhen
    public $IncludeResults; // boolean
    public $IncludeObjects; // boolean
    public $OnlyIncludeBase; // boolean
}