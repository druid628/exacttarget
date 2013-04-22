<?PHP

namespace drui628\exactTarget\provider;

use druid628\exactTarget\EtClient,
    druid628\exactTarget\EtSubscriber;
    druid628\exactTarget\EtTriggeredSend;

/**
 * STILL IN DEVELOPMENT  - Symfony Provider Class
 *
 * @package exactTarget
 * @author Micah Breedlove <druid628@gmail.com> <micah@blueshamrock.com>
 * @version 1.1-DEV
 */
class ExactTargetProvider
{
    private $client;

    /**
     * Creates authentication populated EtClient
     *
     * @param String $username       Exact Target username
     * @param String $password       Exact Target password
     * @param String $serverInstance Exact Target Server/Instance (e.g. ""; "s4"; "s6")
     */
    public function __construct($username, $password, $serverInstance = '')
    {
        $this->client = new EtClient($username, $password, $serverInstance);
    }

    /**
     * Returns authentication populated EtClient object
     *
     * @return drui628\exactTarget\EtClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Find an existing Subscriber within you ExactTarget Data
     *
     * @param String $subscriberKey Unique Identifier for desired Subscriber
     *                 (typically the same as $email)
     * @param String $email   Unique Email address for desired Subscriber
     * @param array  $options Additional attributes used to match subscriber
     *
     * @return drui628\exactTarget\EtSubscriber
     */
    public function findSubscriber($subscriberKey, $email = null, $options = array() )
    {

        $subscriber = new EtSubscriber($this);
        $subscriber->find($subscriberKey, $email, $options);

        return $subscriber;

    }

    /**
     * Send TriggeredSend Event  - Simplified with no fuss just params
     *
     * @param String $triggeredSendKey Unique Identifier for desired TriggeredSend
     * @param array  $subscribers      Array of EtSubscriber objects intented to
     *                 receive TriggeredSend
     * @return boolean
     */
    public function sendTriggeredSend($triggeredSendKey, array $subscribers)
    {

        $ts = new EtTriggeredSend($this);
        $ts->setSubscribers($subscribers);

        return $ts->send();
    }

}
