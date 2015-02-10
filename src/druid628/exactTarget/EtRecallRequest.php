<?PHP

namespace druid628\exactTarget;


class EtRecallRequest extends EtBaseClass
{
    public $ClientIDs; // EtClientID
    public $ObjectType; // String
    public $Properties; // String
    public $Filter; // EtFilterPart
    public $RespondTo; // EtAsyncResponse
    public $PartnerProperties; // EtAPIProperty
    public $ContinueRequest; // String
    public $QueryAllAccounts; // boolean
    public $RetrieveAllSinceLastBatch; // boolean
    public $RepeatLastResult; // boolean
    public $Retrieves; // EtRetrieves
    public $Options; // EtRetrieveOptions
}
