<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtPropertyDefinition;

class EtDataExtensionField extends EtPropertyDefinition
{
    public $Ordinal; // int
    public $IsPrimaryKey; // boolean
    public $FieldType; // EtDataExtensionFieldType
    public $DataExtension; // EtDataExtension
}

