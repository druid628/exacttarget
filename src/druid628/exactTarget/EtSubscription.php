<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtSubscription extends EtBaseClass
{
    public $SubscriptionID; // int
    public $EmailsPurchased; // int
    public $AccountsPurchased; // int
    public $AdvAccountsPurchased; // int
    public $LPAccountsPurchased; // int
    public $DOTOAccountsPurchased; // int
    public $BUAccountsPurchased; // int
    public $BeginDate; // dateTime
    public $EndDate; // dateTime
    public $Notes; // String
    public $Period; // String
    public $NotificationTitle; // String
    public $NotificationMessage; // String
    public $NotificationFlag; // String
    public $NotificationExpDate; // dateTime
    public $ForAccounting; // String
    public $HasPurchasedEmails; // boolean
}

