<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtVersionInfoResponse extends EtBaseClass
{
    public $Version; // String
    public $VersionDate; // dateTime
    public $Notes; // String
    public $VersionHistory; // EtVersionInfoResponse
}

