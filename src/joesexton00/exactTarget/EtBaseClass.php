<?PHP

namespace joesexton00\exactTarget;

/**
 * EtBaseClass
 *
 * Basic class with generic getters and setters with capability for
 * further expansion. Includes lcfirst().
 *
 * @package exactTarget
 * @author Micah Breedlove <druid628@gmail.com>
 * @version 1.0
 *
 */
abstract class EtBaseClass {

        /**
         * magic getter
         *
         * @param String $fieldName
         * @return mixed
         * @throws \Exception
         */
        public function get($fieldName) {

            if (!property_exists($this, $fieldName)) {
                    throw new \Exception("Variable  ($fieldName) Not Found on " . get_class($this) . " object. ");
            }

            return $this->$fieldName;
        }

        /**
         * magic setter
         *
         * @param String $fieldName
         * @param mixed $value
         * @return boolean
         * @throws \Exception
         */
        public function set($fieldName, $value) {

            if (!property_exists($this, $fieldName)) {
                    throw new \Exception("Variable  ($fieldName) Not Found on " . get_class($this) . " object. ");
            }

            $this->$fieldName = $value;
            return true;
        }

        /**
         * Magic
         *
         * @param string $method
         * @param array $arguments
         * @return mixed
         * @throws \Exception
         */
        public function __call($method, $arguments) {

            try {
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
                } else {
                        throw new \Exception("Function ($verb) Not Defined");
                }
            } catch ( EtErrorException $e ) { // @todo jms-update
                throw $e;
            } catch (\Exception $e) {
                throw $e;
            }
        }

        /**
         * cast() - casts generic object to Et-Specific object
         *
         * @param stdObj $obj - standard php object
         * @param string $class - Et-class
         * @param EtClient $client
         *
         * @return <typeOf $class>
         *
         */
        public function cast($obj, $class, $client = null) {

            $reflectionClass = new \ReflectionClass($class);
            if (!$reflectionClass->IsInstantiable()) {
                    throw new \Exception($class . " is not instantiable!");
            }

            if ($obj instanceof $class) {
                    return $obj; // nothing to do.
            }

            // lets instantiate the new object
            $tmpObject = $reflectionClass->newInstance($client);

            $properties = Array();
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

            // make sure that we only have one result as object
            if(is_array($obj)) $obj = $obj[0];

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
         * @see joesexton00\exactTarget\EtSubscriber
         *
         */
        protected function reAssign($newClass) {

            if (get_class($newClass) !== get_class($this))
            {
                return false;
            }

            $vars = get_class_vars(get_class($newClass));
            unset($vars['client']);
            foreach ($vars as $variable => $value)
            {
                $this->set($variable, $newClass->get($variable));
            }

        }

        /**
         * PHP has a function ucfirst() but not a lcfirst() now it does
         * Lowers the first character of a string.
         *
         * @param String $string
         * @return String
         */
        public function lcfirst($string) {

                $string{0} = strtolower($string{0});
                return $string;
        }




}
