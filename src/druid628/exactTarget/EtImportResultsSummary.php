<?PHP

namespace druid628\exactTarget;


class EtImportResultsSummary extends EtBaseClass
{
    public $ImportDefinitionCustomerKey; // String
    public $StartDate; // String
    public $EndDate; // String
    public $DestinationID; // String
    public $NumberSuccessful; // int
    public $NumberDuplicated; // int
    public $NumberErrors; // int
    public $TotalRows; // int
    public $ImportType; // String
    public $ImportStatus; // String
    public $TaskResultID; // int
}
