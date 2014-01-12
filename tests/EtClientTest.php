<?php

use druid628\exactTarget\EtClient;

class EtClientTest extends PHPUnit_Framework_TestCase
{

    public function testCreation()
    {
        $client = new EtClient('test', 'test');

        $this->assertEquals(get_class($client), 'druid628\exactTarget\EtClient');

        $this->assertEquals($client->getServer(), '');

        $client->setServer('s6');

        $this->assertEquals($client->getServer(), 's6');

    }

/*
    public function testRecall()
    {
        $client = new EtClient('test', 'test', 's4');

        $subscriberInfo = array(
            array(
                "Name"     => "SubscriberKey",
                "Value"    => "druid628@gmail.com",
                "operator" => "equals",
            ),
            array(
                "Name"     => "EmailAddress",
                "Value"    => "druid628@gmail.com",
                "operator" => "equals",
            ),
        );

        $sub = $client->recallSubscriber($subscriberInfo);

    }
*/

}

