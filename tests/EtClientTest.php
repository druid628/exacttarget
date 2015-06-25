<?php

use druid628\exactTarget\EtClient;
use druid628\exactTarget\EtSubscriber;

class EtClientTest extends PHPUnit_Framework_TestCase
{
    public function testServerConfig()
    {
        $client = new EtClient('test', 'test', 's4');

        $this->assertEquals(get_class($client), 'druid628\exactTarget\EtClient');
        $this->assertEquals($client->getServer(), 's4');

        $client->setServer('s6');

        $this->assertEquals($client->getServer(), 's6');

    }

    public function testBuildTriggeredSend()
    {
        $client = new EtClient('test', 'test', 's4');
        $ts     = $client->buildTriggeredSend('motherbrain');

        $this->assertEquals(get_class($ts), 'druid628\exactTarget\EtTriggeredSend');
    }

    public function testCastMethod()
    {
        $blankClass                = new stdClass();
        $blankClass->EmailAddress  = 'druid628@gmail.com';
        $blankClass->SubscriberKey = 'druid628@gmail.com';
        $client                    = new EtClient('test', 'test', 's4');
        $subscriber                = $client->cast($blankClass, 'druid628\exactTarget\EtSubscriber', $client);

        $this->assertEquals(get_class($subscriber), 'druid628\exactTarget\EtSubscriber');
        $this->assertEquals($subscriber->getEmailAddress(), 'druid628@gmail.com');
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
