<?php

require dirname(__FILE__).'/callback.php';

require dirname(__FILE__).'/config.php';
require dirname(__FILE__).'/../lib/autoload.php';

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN, TWILIO_PHONE);

$response = new Majax_Twilio_Twiml($client);

if (!$client->validateRequest())
{
    $response->say("We were unable to validate this call. Good bye!");
    $response->hangup();
}

$response->say("Call validated");

echo $response->toString();