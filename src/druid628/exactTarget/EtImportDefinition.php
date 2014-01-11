<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtImportDefinition extends EtBaseClass
{
    public $AllowErrors; // boolean
    public $DestinationObject; // EtAPIObject
    public $FieldMappingType; // EtImportDefinitionFieldMappingType
    public $FieldMaps; // EtFieldMaps
    public $FileSpec; // String
    public $FileType; // EtFileType
    public $Notification; // EtAsyncResponse
    public $RetrieveFileTransferLocation; // EtFileTransferLocation
    public $SubscriberImportType; // EtImportDefinitionSubscriberImportType
    public $UpdateType; // EtImportDefinitionUpdateType
    public $MaxFileAge; // int
    public $MaxFileAgeScheduleOffset; // int
    public $MaxImportFrequency; // int
    public $Delimiter; // String
    public $HeaderLines; // int
}

