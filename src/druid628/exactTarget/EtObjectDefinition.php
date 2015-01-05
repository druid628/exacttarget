<?PHP

namespace druid628\exactTarget;


class EtObjectDefinition extends EtBaseClass
{
    public $ObjectType; // String
    public $Name; // String
    public $IsCreatable; // boolean
    public $IsUpdatable; // boolean
    public $IsRetrievable; // boolean
    public $IsQueryable; // boolean
    public $IsReference; // boolean
    public $ReferencedType; // String
    public $IsPropertyCollection; // String
    public $IsObjectCollection; // boolean
    public $Properties; // EtPropertyDefinition
    public $ExtendedProperties; // EtExtendedProperties
    public $ChildObjects; // EtObjectDefinition
}
