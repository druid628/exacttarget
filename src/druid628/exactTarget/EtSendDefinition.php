<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtSendDefinition extends EtBaseClass
{
    public $CategoryID; // int
    public $SendClassification; // EtSendClassification
    public $SenderProfile; // EtSenderProfile
    public $FromName; // String
    public $FromAddress; // String
    public $DeliveryProfile; // EtDeliveryProfile
    public $SourceAddressType; // EtDeliveryProfileSourceAddressTypeEnum
    public $PrivateIP; // EtPrivateIP
    public $DomainType; // EtDeliveryProfileDomainTypeEnum
    public $PrivateDomain; // EtPrivateDomain
    public $HeaderSalutationSource; // EtSalutationSourceEnum
    public $HeaderContentArea; // EtContentArea
    public $FooterSalutationSource; // EtSalutationSourceEnum
    public $FooterContentArea; // EtContentArea
    public $SuppressTracking; // boolean
    public $IsSendLogging; // boolean
}
