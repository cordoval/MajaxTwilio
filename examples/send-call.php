<?php

require dirname(__FILE__).'/config.php';
require dirname(__FILE__).'/../lib/autoload.php';

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN, TWILIO_PHONE);

$client->createCall('+15178033009', BASE_URL.'/call-script.php')->send();