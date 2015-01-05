<?PHP

namespace druid628\exactTarget;


/**
 * EtAttribute (Passive Class)
 *
 * Passive classes do not directly communicate with the Exact Target server.
 *
 * @package exactTarget
 * @author  Micah Breedlove <druid628@gmail.com>
 * @version 1.0
 */

class EtAttribute extends EtBaseClass
{
    public $Name; // string
    public $Value; // string

    public function __construct($name = null, $value = null)
    {
        if (!is_null($name)) {
            $this->Name = $name;
        }
        if (!is_null($value)) {
            $this->Value = $value;
        }
    }
}
