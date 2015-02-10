<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\Exception\EtMethodNotFoundException;

/**
 * EtBaseClass
 *
 * Basic class with generic getters and setters with capability for
 * further expansion.
 *
 * @package exactTarget
 * @author  Micah Breedlove <druid628@gmail.com>
 * @version 1.0
 *
 */
abstract class EtBaseClass
{
    /**
     * magic getter
     *
     * @param $fieldName
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function get($fieldName)
    {
        if (!property_exists($this, $fieldName)) {
            throw new \Exception("Variable  ($fieldName) Not Found on ".get_class($this)." object. ");
        }

        return $this->$fieldName;
    }

    /**
     * Magic
     *
     * @param string $method
     * @param array  $arguments
     *
     * @return mixed
     * @throws EtMethodNotFoundException
     * @throws \Exception
     */
    public function __call($method, $arguments)
    {
        $verb = substr($method, 0, 3);

        if (in_array($verb, array('set', 'get'))) {
            $name = substr($method, 3);
        }

        if (method_exists($this, $verb)) {
            if (property_exists($this, $name)) {
                return call_user_func_array(array($this, $verb), array_merge(array($name), $arguments));
            } elseif (property_exists($this, lcfirst($name))) {
                return call_user_func_array(array($this, $verb), array_merge(array(lcfirst($name)), $arguments));
            } else {
                throw new \Exception("Variable  ($name)  Not Found");
            }
        }

        throw new EtMethodNotFoundException("No Method ($method) exists on ".get_class($this));
    }

    /**
     * cast() - casts generic object to Et-Specific object
     *
     * @param stdClass $obj    - standard php object
     * @param string   $class  - Et-class
     * @param EtClient $client
     *
     * @return <typeOf $class>
     *
     */
    public function cast($obj, $class, $client = null)
    {
        $reflectionClass = new \ReflectionClass($class);
        if (!$reflectionClass->IsInstantiable()) {
            throw new \Exception($class." is not instantiable!");
        }

        if ($obj instanceof $class) {
            return $obj; // nothing to do.
        }

        // lets instantiate the new object
        $tmpObject = null;
        try {
            $r = new \ReflectionMethod($class, '__construct');
            $params = $r->getParameters();
            if (count($params)) {
                $tmpObject = $reflectionClass->newInstance($client);
            }
        } catch (\ReflectionException $e) {
            // do nothing
        }

        if ($tmpObject === null) {
            $tmpObject = $reflectionClass->newInstance();
        }

        $properties = array();
        foreach ($reflectionClass->getProperties() as $property) {
            $properties[$property->getName()] = $property;
        }

        // we'll take all the properties from the fathers as well
        // overwriting the old properties from the son as well if needed.
        $parentClass = $reflectionClass; // loop init
        while ($parentClass = $parentClass->getParentClass()) {
            foreach ($parentClass->getProperties() as $property) {
                $properties[$property->getName()] = $property;
            }
        }

        // now lets see what we have set in $obj and transfer that to the new object
        $vars = get_object_vars($obj);
        foreach ($vars as $varName => $varValue) {
            if (array_key_exists($varName, $properties)) {
                $prop = $properties[$varName];
                if (!$prop->isPublic()) {
                    $prop->setAccessible(true);
                }
                $prop->setValue($tmpObject, $varValue);
            }
        }

        return $tmpObject;
    }

    /**
     * reAssign - Used to reassign existing object's ($this) variables to the ones from
     * the given to method.
     *
     * @param mixed $newClass - any Et-class
     *
     * @see druid628\exactTarget\EtSubscriber
     *
     */
    protected function reAssign($newClass)
    {
        if (get_class($newClass) !== get_class($this)) {
            return false;
        }

        $vars = get_class_vars(get_class($newClass));
        unset($vars['client']);
        foreach ($vars as $variable => $value) {
            $this->set($variable, $newClass->get($variable));
        }
    }

    /**
     * magic setter
     *
     * @param string $fieldName
     * @param mixed  $value
     *
     * @return boolean
     * @throws \Exception
     */
    public function set($fieldName, $value)
    {
        if (!property_exists($this, $fieldName)) {
            throw new \Exception("Variable  ($fieldName) Not Found on ".get_class($this)." object. ");
        }

        $this->$fieldName = $value;

        return true;
    }
}
