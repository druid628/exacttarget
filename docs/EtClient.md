# EtClient

## Abstract

The EtClient is the main conduit to the ExactTarget API. All interactions with 
the ExactTarget servers go through it. It can serve as the mediator or a factory
 class.  Other classes can be used outside the context of the EtClient file.  

When using the EtClient as a factory, the EtClient class comes with a few magic 
functions which allow you to request a specific action and class, which each 
execute SOAP calls to preform their intended action.  


## Purpose

The bread and butter of this library. The ExactTarget starterKit provides a 
series of samples leans to a very buck-shot scattered method for use of SOAP 
calls. This puts all interactions with the SOAP calls in one place.

## Functions

There are three (3) function calls built into this client:

 * buildTriggeredSend
 * sendEmail
 * getDefinitionOfObject

### buildTriggeredSend

The **buildTriggeredSend **function accepts two (2) arguments the first -- 
required -- is the triggeredSendKey which is the "External Key" for the specific
 Triggered Email and can be found in the Web UI under Interactions > Messages > 
TriggeredSends.

The second (optional) is an array of options built as a key-value pair which 
should correspond with available variables on the EtTriggeredSendDefinition class.

    $EtClient->buildTriggeredSend($triggeredSendKey, [$optionalAttributesArray]);

### sendEmail

The **sendEmail **function accepts two (2) required variables the first is an 
Et-object which is valid for sending (e.g. EtTriggeredSend, EtEmail, etc) the 
second is the SendType the type of the object which should be used for SOAP 
communications.

    $EtClient->sendEmail($EmailableClass, $EmailableClassType);

### getDefinitionOfObject

The **getDefinitionOfObject **function is a function provided by the ExactTarget
 PHP Starter Kit used for getting the properties of an ExactTarget record (think
 of MySQL's DESCRIBE) and returning the properties that are "Retrievable".

    $EtClient->getDefinitionOfObject($EtClass);

## Magic

There are four (4) magic function calls built into this client

 * _create_ - Creates and returns a specified Et object
 * _recall_ - Retrieve a populated Et-class for an existing ExactTarget record based on filter parameters provided (returns false if none exists)
 * _update_ - Updates an existing ExactTarget record based on the Et object given
 * _bundle_ - Batch update method which will call an Update request used to add many subscribers, etc.

## Examples 

### Mediator/ Straight OO
**Example (subscriber)**:  

    // instantiates the Client for SOAP Communications
    $client = new EtClient($userName,$password);
 
    // Subscriber object is passed the client 
    $subscriber    = new EtSubscriber($client);
    $subscriberKey = $emailAddress = "user@domain.com";

    // Find a subscriber from ExactTarget by subscriber key (email address is optional)
    $subscriber->find($subscriberKey, $emailAddress);

    // Add Subscriber to a specific list (by list id)
    $subscriber->addToList("24601");

    // Build a new Attribute 
    $newAttrib = new EtAttribute();
    $newAttrib->setName('Metroid Save Code'); // Attribute Name
    $newAttrib->setValue("------ ---mE3 l-y000 00y00j"); // Attribute Value

    // setAttributes is be used for initially setting attributes on subscriber
    $subscriber->setAttributes(array($newAttrib)); 

    // updateAttribute is used for objects which already have attributes
    // $subscriber->updateAttribute($newAttrib); 

    // Update Subscriber record
    $subscriber->save(); 

    /* either by the save method on EtSubscriber or
     * via the EtClient 
     * $client->updateSubscriber($subscriber, 'updateOnly');   
     */

**Example (Triggered Send)**:  

    // Initialize EtClient
    $client = new EtClient($userName,$password); 

    // create Triggered Send object giving it access to the EtClient object
    $ts = new EtTriggeredSend($client);

    // Define which triggered send to use
    $ts->useKey("defeatedMotherBrain");

    // create Subscriber object giving it access to the EtClient object
    $sub = new EtSubscriber($client);

    // search for a user by subscriber key [required] and 
    // email address [optional]
    $sub->find("user@domain.com","user@domain.com");
    
    // define the subscribers the Triggered Send is bound for
    $ts->setSubscribers(array($sub));

    // execute send
    $ts->send();

### Factory

**Example (create subscriber)**:  

    // instantiates the Client for SOAP Communications
    $client = new EtClient($userName,$password);
 
    $userData   = array(
         'SubscriberKey'       => "user@domain.com",
         'EmailAddress'        => "user@domain.com",
         'EmailTypePreference' => EtEmailType::Text,
    );
    $subscriber = $client->createSubscriber($userData);

    // Add Subscriber to a specific list (by list id)
    $subscriber->addToList("24601");

    // Build a new Attribute 
    $newAttrib = new EtAttribute();
    $newAttrib->setName('Metroid Save Code'); // Attribute Name
    $newAttrib->setValue("------ ---mE3 l-y000 00y00j"); // Attribute Value

    // setAttributes is be used for initially setting attributes on subscriber
    $subscriber->setAttributes(array($newAttrib)); 

    // updateAttribute is used for objects which already have attributes
    // $subscriber->updateAttribute($newAttrib); 

    $client->updateSubscriber($subscriber, 'updateOnly');   


**Example (recall subscriber)**:  

    // instantiates the Client for SOAP Communications
    $client = new EtClient($userName,$password);
 
     $subscriberInfo = array(
      array(
          "Name" => "SubscriberKey",
          "Value" => "user@domain.com",
          "operator" => "equals",
          ),
      array(
          "Name" => "EmailAddress",
          "Value" => "user@domain.com",
          "operator" => "equals",
          ),
      );
    $subscriber = $client->recallSubscriber($subscriberInfo);

