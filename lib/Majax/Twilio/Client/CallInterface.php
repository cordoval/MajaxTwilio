<?php

interface Majax_Twilio_Client_CallInterface
{
    /**
     * @abstract
     * @param $to
     * @param $script
     * @return Majax_Twilio_Client_Call
     */
    public function createCall($to, $script = '');
}