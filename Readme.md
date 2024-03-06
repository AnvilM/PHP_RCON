# About

Minecraft RCON lib for Laravel

## Install

You can get this package using composer

```bash
composer require anvilm/rcon
```

## Configuration
To use RCON on your server, you need to enable it and configure it in your Minecraft server settings.

In the file server.properties
```properties
rcon.port=25575
enable-rcon=true
rcon.password=123
```


# Getting started


## Create connection

To create an RCON connection to a minecraft server, you need to create an object of the RCON class.

```php
use AnvilM\RCON\RCON;

$Ip = '127.0.0.1'; //Server IP
$Port = 25575; //RCON port
$Password = '123'; //RCON password
$Timeout = 30; //Timeout in ms 

$RCON = new RCON($Ip, $Port, $Password, $Timeout);
```

## Send commands

To send a command to the server, use this method of the RСON class.
This method will return the response from the server.

```php
use AnvilM\RCON\RCON;

...

$RCON->sendCommand('time set day');
```

## Server Responses

### All responses
To get all responses from the server use the following method

```php
use AnvilM\RCON\RCON;

...

$Response = $RCON->ResponseService->getAllResponses();
```

### Last response
To get last response from the server use the following method

```php
use AnvilM\RCON\RCON;

...

$Response = $RCON->ResponseService->getLastResponse();
```

### Response by id
You can get a specific server response from a list if you have the ID of that response.

```php
use AnvilM\RCON\RCON;

...

$Response = $RCON->ResponseService->getResponse(3);
```

## Examle
Here is a real example of using this library

```php
namespace App\Http\Controllers;

use AnvilM\RCON\RCON;

class RCONController extends Controller
{
    public function setDay()
    {
        $Ip = '127.0.0.1'; //Server IP
        $Port = 25575; //RCON port
        $Password = '123'; //RCON password
        $Timeout = 30; //Timeout in ms 

        $RCON = new RCON($Ip, $Port, $Password, $Timeout); //Create connection

        $RCON->sendCommand('time set day'); //Send command

        $Response = $RCON->ResponseService->getLastResponse(); //Get last response

        echo $Response;
    }
}
```

As a result of executing this code you should get the following result

```
    Set the time to 1000
```