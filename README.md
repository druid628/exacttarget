ExactTargetComponent  
========

**Package:** druid628\exactTarget  
**Uses:** EtBaseClass.php  
**Version:** 1.0

General  
----------
The ExactTarget component is a collection of classes based on the 
ExactTarget PHP starter kit. The purpose of this library is to spend less time 
writing Exact Target code and more time working with your application.
The EtClient handles all SOAP communication. This class holds several 
functions (defined below) which allows the EtClient to be self-sufficent on a 
basic level.  
ExactTarget API PHP starter kit (available: 
<http://docs.code.exacttarget.com/@api/deki/files/199/=PHP_APIstarterKit-V1.zip>
Source: 
<http://docs.code.exacttarget.com/020_Web_Service_Guide/API_Starter_Kits>)
  

Usage  
----------
The EtClient is the main conduit to the ExactTarget API. All interactions 
should go through it.  Other classes can be used outside the context of the 
EtClient file.

Each *magic* function works as Symfony-like *magic* getters and setters.  The 
create, recall, and update each execute SOAP calls to preform their intended 
action.  
  
**Example (subscriber)**:  

    // instantiates the Client for SOAP Communications
    $client = new EtClient($userName,$password);
 
    // Subscriber object is passed the client 
    $subscriber = new EtSubscriber($client);

    $subscriberKey = $emailAddress = "user@domain.com";
    // Find a subscriber from ExactTarget by subscriber key (email address is 
    // optional)
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

* * *

EtClient
----------
The bread and butter of this library. The ExactTarget starterKit provides a 
series of samples leans to a very buck-shot scattered method for use of SOAP 
calls. This puts all interactions with the SOAP calls in one place.  

####Functions

There are three (3) function calls built into this client:  

* buildTriggeredSend
* sendEmail
* getDefinitionOfObject


The **buildTriggeredSend** function accepts two (2) arguments the first -- 
required -- is the triggeredSendKey which is the "External Key" for the specific
Triggered Email and can be found in the Web UI under Interactions > Messages > 
TriggeredSends.  

The second -- optional -- is an array of options built as a key-value pair which
should correspond with available variables on the EtTriggeredSendDefinition
class.  
  
`$EtClient->buildTriggeredSend($triggeredSendKey, [$optionalAttributesArray]);`  
  
The **sendEmail** function accepts two (2) *required* variables the first is an 
Et object which  is valid for sending (e.g. EtTriggeredSend, EtEmail, etc)
 the second is the SendType the type of the object which should be used for SOAP
 communications.  
  
`$EtClient->sendEmail($EmailableClass, $EmailableClassType);`  
  
The **getDefinitionOfObject** function is a function provided by the Exact 
Target PHP Starter Kit used for getting the properties of an Exact Target 
record (think of mysql> DESC <table>;) and returning the properties that are 
"Retrievable".  

`$EtClient->getDefinitionOfObject($EtClass);`  

 * #### Magic
There are three (3) *magic* function calls built into this client (for an 
example of their useage see the Usage heading below).    

  *  create - creates and returns a specified Et object
  *  recall - retrieve an Et class for an existing Exact Target record based 
  on filter parameters provided (returns false if none exists)
  *  update - updates an existing Exact Target record based on the Et object 
  given
  *  bundle - Batch update method which will call an Update request used to add 
  many subscribers, etc.

* * *

CHANGELOG  
----------
###1.0  
####Client Access
EtEmail, EtList, EtSubscriber, and EtTriggeredSend all now can be 
passed the EtClient allowing for save and send functions (see below).
####Save Methods
EtEmail, EtList and EtSubscriber objects now have a save() method which 
eliminates the need for calling the client update yourself.
####Send Methods
EtEmail and EtTriggeredSend objects now have a send() method which 
eliminates the need for calling the client sendEmail yourself.

* * *

Contributors
----------
 * Micah Breedlove - <https://github.com/druid628> - [@druid628](http://twitter.com/druid628)
 * Matt Rathbun  

