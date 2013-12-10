<?PHP

namespace joesexton00\exactTarget;

use \Exception;

/**
 * EtErrorException
 *
 * Exception for Exact Target Errors
 *
 * @package exactTarget
 * @author Joe Sexton <joe.sexton@bigideas.com>
 * @version 1.0
 *
 */
class EtErrorException extends Exception {

    /**
     * @var Object|EtCreateRequest
     */
    protected $request;

    /**
     * @var stdClass Object
     */
    protected $results;

    /**
     * set request
     *
     * @param Object $request
     */
    public function setRequest( $request ) {

        $this->request = $request;

        return $this;

    } // end setRequest

    /**
     * get request
     *
     * @return Object
     */
    public function getRequest() {

        return $this->request;

    } // end getRequest

    /**
     * set results
     *
     * @param Object $results
     */
    public function setResults( $results ) {

        $this->results = $results;

        return $this;

    } // end setResults

    /**
     * get results
     *
     * @return Object
     */
    public function getResults() {

        return $this->results;

    } // end getResults


}
