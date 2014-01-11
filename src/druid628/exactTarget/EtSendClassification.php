<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtSendClassification extends EtBaseClass
{
    public $SendClassificationType; // EtSendClassificationTypeEnum
    public $Name; // String
    public $Description; // String
    public $SenderProfile; // EtSenderProfile
    public $DeliveryProfile; // EtDeliveryProfile
}

