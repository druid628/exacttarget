<?PHP

namespace druid628\exactTarget;


class EtImportDefinitionUpdateType extends EtBaseClass
{
    const AddAndUpdate      = 'AddAndUpdate';
    const AddAndDoNotUpdate = 'AddAndDoNotUpdate';
    const UpdateButDoNotAdd = 'UpdateButDoNotAdd';
    const Merge             = 'Merge';
    const Overwrite         = 'Overwrite';
}
