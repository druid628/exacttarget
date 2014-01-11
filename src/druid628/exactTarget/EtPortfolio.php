<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtPortfolio extends EtBaseClass
{
    public $Source; // EtResourceSpecification
    public $CategoryID; // int
    public $FileName; // String
    public $DisplayName; // String
    public $Description; // String
    public $TypeDescription; // String
    public $IsUploaded; // boolean
    public $IsActive; // boolean
    public $FileSizeKB; // int
    public $ThumbSizeKB; // int
    public $FileWidthPX; // int
    public $FileHeightPX; // int
    public $FileURL; // String
    public $ThumbURL; // String
    public $CacheClearTime; // dateTime
    public $CategoryType; // String
}

