<?php 

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;
use druid628\exactTarget\lib\WSSESoap;


/**
 * EtSoapClient 
 * 
 * The SOAP request handler.
 * 
 * @package exactTarget
 * @author Micah Breedlove <druid628@gmail.com>
 * @version 1.0
 */

class EtSoapClient extends \SoapClient {
    public $username = NULL;
    public $password = NULL;

    function __doRequest($request, $location, $saction, $version, $one_way = 0) {
        $doc = new \DOMDocument();
        $doc->loadXML($request);

        $objWSSE = new WSSESoap($doc);

        $objWSSE->addUserToken($this->username, $this->password, FALSE);

        return parent::__doRequest($objWSSE->saveXML(), $location, $saction, $version, $one_way);
   }

}
