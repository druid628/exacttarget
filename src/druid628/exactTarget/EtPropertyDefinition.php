<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtAPIObject;

class EtPropertyDefinition extends EtAPIObject
{
    public $Name; // String
    public $DataType; // String
    public $ValueType; // EtSoapType
    public $PropertyType; // EtPropertyType
    public $IsCreatable; // boolean
    public $IsUpdatable; // boolean
    public $IsRetrievable; // boolean
    public $IsQueryable; // boolean
    public $IsFilterable; // boolean
    public $IsPartnerProperty; // boolean
    public $IsAccountProperty; // boolean
    public $PartnerMap; // String
    public $AttributeMaps; // EtAttributeMap
    public $Markups; // EtAPIProperty
    public $Precision; // int
    public $Scale; // int
    public $Label; // String
    public $Description; // String
    public $DefaultValue; // String
    public $MinLength; // int
    public $MaxLength; // int
    public $MinValue; // String
    public $MaxValue; // String
    public $IsRequired; // boolean
    public $IsViewable; // boolean
    public $IsEditable; // boolean
    public $IsNillable; // boolean
    public $IsRestrictedPicklist; // boolean
    public $PicklistItems; // EtPicklistItems
    public $IsSendTime; // boolean
    public $DisplayOrder; // int
    public $References; // EtReferences
    public $RelationshipName; // String
    public $Status; // String
    public $IsContextSpecific; // boolean
}

