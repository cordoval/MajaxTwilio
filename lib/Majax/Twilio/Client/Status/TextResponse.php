<?php

/*
array (
  'AccountSid' => 'ACda81ea98e3a44c3e8e07d2812e0392c9',
  'SmsStatus' => 'sent',
  'Body' => 'Sent from the Twilio Sandbox Number - callback',
  'SmsSid' => 'SMaa479ddd74c749059382451fc80503ce',
  'To' => '+15178033009',
  'From' => '+14155992671',
  'ApiVersion' => '2010-04-01',
)
*/

class Majax_Twilio_Client_Status_TextResponse
{
    private $account_sid;
    private $status;
    private $body;
    private $sms_id;
    private $to;
    private $from;
    private $api_version;

    public function __construct($post_vars)
    {
        $this->account_sid = $post_vars['AccountSid'];
        $this->status = $post_vars['SmsStatus'];
        $this->body = $post_vars['Body'];
        $this->sms_id = $post_vars['SmsId'];
        $this->to = $post_vars['To'];
        $this->from = $post_vars['From'];
        $this->api_version = $post_vars['ApiVersion'];
    }

    public function getAccountSid()
    {
        return $this->account_sid;
    }

    public function getApiVersion()
    {
        return $this->api_version;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function getSmsId()
    {
        return $this->sms_id;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function isSent()
    {
        if ($this->status == 'sent')
            return true;
        return false;
    }
}