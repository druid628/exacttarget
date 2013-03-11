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

    public function __construct($username, $password)
    {
        $this->client = new EtClient($username, $password);
    }


    public function getClient()
    {
        return $this->client;
    }


    public function getSubscriber($subscriberKey, $email = null, $options = array() )
    {

        $subscriber = new EtSubscriber($this);
        $subscriber->find($subscriberKey, $email, $options);

        return $subscriber;

    }

    public function sendTriggeredSend($triggeredSendKey, array $subscribers)
    {

        $ts = new EtTriggeredSend($this);
        $ts->setSubscribers($subscribers);
        return $ts->send();
    }


}
