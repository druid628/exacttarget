<?php

use druid628\exactTarget\EtClient;
use druid628\exactTarget\EtSubscriber;

class EtSubscriberTest extends PHPUnit_Framework_TestCase
{

    private $client;

    public function setUp()
    {
        $this->client = new EtClient('test', 'test');
    }

    public function testConstruction()
    {
        $subscriber = new EtSubscriber($this->client);

    }

}