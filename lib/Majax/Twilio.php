<?php

class Majax_Twilio
{
    private $from_number;
    private $client;

    public function __construct(Majax_Twilio_Client_Interface $client, $from_phone_number = '')
    {
        $this->from_number = $from_phone_number;
        $this->client = $client;
    }

    public function setFromPhoneNumber($phone_number)
    {
        $this->from_number = $phone_number;
    }

    public function call($to, $script_url)
    {
        try {
            $call = $this->client->account->calls->create(
                $this->from_number,
                $to,
                $script_url
            );
            return $call->sid;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

    }

    public function sms($to, $text, $callback_url = null)
    {
        try {
            $opts = array();
            if ($callback_url)
                $opts['StatusCallback'] = $callback_url;
            $message = $this->client->account->sms_messages->create(
                $this->from_number,
                $to,
                $text,
                $opts
            );
            return $message->sid;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}