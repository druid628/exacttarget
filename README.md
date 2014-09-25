ExactTargetComponent  
========

**Package:** druid628\exactTarget  
**Uses:** EtBaseClass.php  
**Version:** 1.0  
![author](http://img.shields.io/badge/author-druid628-blue.svg)  
![Project status](http://stillmaintained.com/druid628/exacttarget.png)
[![Build Status](https://travis-ci.org/druid628/exacttarget.png?branch=master)](https://travis-ci.org/druid628/exacttarget) 
[![Coverage Status](https://coveralls.io/repos/druid628/exacttarget/badge.png)](https://coveralls.io/r/druid628/exacttarget) 
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/c1e05860-505e-4152-a8f7-98ffac826de6/mini.png)](https://insight.sensiolabs.com/projects/c1e05860-505e-4152-a8f7-98ffac826de6)  
[![Latest Stable Version](https://poser.pugx.org/druid628/exacttarget/v/stable.png)](https://packagist.org/packages/druid628/exacttarget) [![Total Downloads](https://poser.pugx.org/druid628/exacttarget/downloads.png)](https://packagist.org/packages/druid628/exacttarget) [![Latest Unstable Version](https://poser.pugx.org/druid628/exacttarget/v/unstable.png)](https://packagist.org/packages/druid628/exacttarget) [![License](https://poser.pugx.org/druid628/exacttarget/license.png)](https://packagist.org/packages/druid628/exacttarget)

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
  
Presentation: <http://prezi.com/p4ckcmlimnyi/exacttarget-component/?kw=view-p4ckcmlimnyi&rc=ref-13751401>
  
Installation  
----------

### Packagist

Add exacttarget to your composer.json

    {
        "require": {
                "druid628/exacttarget": "dev-master"
        }
    }

Next run a composer update

    $ php composer.phar update druid628/exacttarget


Documentation  
---------------

See the [druid628/exacttarget wiki](https://github.com/druid628/exacttarget/wiki)

* * *

CHANGELOG  
----------
### 1.0  
#### Client Access
EtEmail, EtList, EtSubscriber, and EtTriggeredSend all now can be 
passed the EtClient allowing for save and send functions (see below).
#### Save Methods
EtEmail, EtList and EtSubscriber objects now have a save() method which 
eliminates the need for calling the client update yourself.
#### Send Methods
EtEmail and EtTriggeredSend objects now have a send() method which 
eliminates the need for calling the client sendEmail yourself.
### 1.0.2
#### composer
Added lib-openssl and ext-mcrypt to composer.json file
### 1.0.3
#### Additions

 * Added unit tests
 * Added Exception classes


* * *

Contributors
----------
 * Micah Breedlove - <https://github.com/druid628> - [@druid628](http://twitter.com/druid628)
 * Matt Rathbun  
 * Ryder Ross - <https://github.com/ryross>
 * brainbowler - <https://github.com/brainbowler>

