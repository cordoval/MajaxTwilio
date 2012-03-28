<?php

require dirname(__FILE__).'/config.php';
require dirname(__FILE__).'/../lib/autoload.php';

$client = new Majax_Twilio_Client(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN, TWILIO_PHONE);

$client->createText('+15178033009', 'text message')
    ->setStatusCallback(BASE_URL.'/callback.php')
    ->send();