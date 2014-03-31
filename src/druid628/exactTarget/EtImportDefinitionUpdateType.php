<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtImportDefinitionUpdateType extends EtBaseClass
{
    const ADDANDUPDATE      = 'AddAndUpdate';
    const ADDANDDONOTUPDATE = 'AddAndDoNotUpdate';
    const UPDATEBUTDONOTADD = 'UpdateButDoNotAdd';
    const MERGE             = 'Merge';
    const OVERWRITE         = 'Overwrite';
}

