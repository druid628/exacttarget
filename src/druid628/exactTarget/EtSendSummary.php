<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtSendSummary extends EtBaseClass
{
    public $AccountID; // int
    public $AccountName; // String
    public $AccountEmail; // String
    public $IsTestAccount; // boolean
    public $SendID; // int
    public $DeliveredTime; // String
    public $TotalSent; // int
    public $Transactional; // int
    public $NonTransactional; // int
}

