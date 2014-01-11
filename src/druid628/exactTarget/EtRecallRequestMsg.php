<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtRecallRequestMsg extends EtBaseClass
{
    public $RetrieveRequest; // EtRetrieveRequest
    /**
     * Exact Target relies on Retrieve SOAP Requests containing a
     * RetrieveRequest parameter (typically a RequestMsg object) in
     * order to maintain consistancy of the use of Recall the method
     * setRecallRequest defines the RetrieveRequest parameter with the
     * given object (again, typically a RequestMsg object).
     *
     * @param EtRecallRequestMsg $object
     */
    public function setRecallRequest($object)
    {
        $this->RetrieveRequest = $object;
    }

    /**
     * Exact Target relies on Retrieve SOAP Requests containing a
     * RetrieveRequest parameter (typically a RequestMsg object) in
     * order to maintain consistancy of the use of Recall the method
     * getRecallRequest returns the RetrieveRequest parameter.
     *
     * @return EtRecallRequestMsg
     */
    public function getRecallRequest()
    {
        return $this->RetrieveRequest;
    }
}

