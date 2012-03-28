<?php

interface Majax_Twilio_Client_TextInterface
{
    /**
     * @abstract
     * @param $to string
     * @param $message string
     * @return Majax_Twilio_Client_Text
     */
    public function createText($to, $message = '');
}