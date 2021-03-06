<?php
/*
array (
  'AccountSid' => 'ACda81ea98e3a44c3e8e07d2812e0392c9',
  'ToZip' => '48915',
  'FromState' => 'CA',
  'Called' => '+15178033009',
  'FromCountry' => 'US',
  'CallerCountry' => 'US',
  'CalledZip' => '48915',
  'Direction' => 'outbound-api',
  'FromCity' => 'NOVATO',
  'CalledCountry' => 'US',
  'Direction' => 'inbound',
  'CallerState' => 'CA',
  'CallSid' => 'CAddce5580ec424ca6b7800175c5da646d',
  'CalledState' => 'MI',
  'From' => '+14155992671',
  'CallerZip' => '94949',
  'FromZip' => '94949',
  'CallStatus' => 'in-progress',
  'ToCity' => 'LANSING',
  'ToState' => 'MI',
  'To' => '+15178033009',
  'ToCountry' => 'US',
  'CallerCity' => 'NOVATO',
  'ApiVersion' => '2010-04-01',
  'Caller' => '+14155992671',
  'CalledCity' => 'LANSING',
  'ForwardedFrom' => '',
  'CallerName' => '',
)
 */


class Majax_Twilio_Client_Incoming_CallRequest
{
    private $account_sid;
    private $to_zip;
    private $from_state;
    private $called;
    private $from_country;
    private $caller_country;
    private $called_zip;
    private $direction;
    private $from_city;
    private $called_country;
    private $caller_state;
    private $call_sid;
    private $called_state;
    private $from;
    private $caller_zip;
    private $from_zip;
    private $call_status;
    private $to_city;
    private $to_state;
    private $to;
    private $call_duration;
    private $to_country;
    private $caller_city;
    private $api_version;
    private $caller;
    private $called_city;
    private $forwarded_from;
    private $caller_name;

    public function __construct($vars)
    {
        $this->account_sid = $vars['AccountSid'];
        $this->to_zip = $vars['ToZip'];
        $this->from_state = $vars['FromState'];
        $this->called = $vars['Called'];
        $this->from_country = $vars['FromCountry'];
        $this->caller_country = $vars['CallerCountry'];
        $this->called_zip = $vars['CalledZip'];
        $this->direction = $vars['Direction'];
        $this->from_city = $vars['FromCity'];
        $this->called_country = $vars['CalledCountry'];
        $this->caller_state = $vars['CallerState'];
        $this->call_sid = $vars['CallSid'];
        $this->called_state = $vars['CalledState'];
        $this->from = $vars['From'];
        $this->caller_zip = $vars['CallerZip'];
        $this->from_zip = $vars['FromZip'];
        $this->call_status = $vars['CallStatus'];
        $this->to_city = $vars['ToCity'];
        $this->to_state = $vars['ToState'];
        $this->to = $vars['To'];
        $this->call_duration = $vars['CallDuration'];
        $this->to_country = $vars['ToCountry'];
        $this->caller_city = $vars['CallerCity'];
        $this->api_version = $vars['ApiVersion'];
        $this->caller = $vars['Caller'];
        $this->called_city = $vars['CalledCity'];
        if (isset($vars['ForwardedFrom']))
            $this->forwarded_from = $vars['ForwardedFrom'];
        if (isset($vars['CallerName']))
            $this->caller_name = $vars['CallerName'];
    }

    public function getAccountSid()
    {
        return $this->account_sid;
    }

    public function getApiVersion()
    {
        return $this->api_version;
    }

    public function getCallDuration()
    {
        return $this->call_duration;
    }

    public function getCallSid()
    {
        return $this->call_sid;
    }

    public function getCallStatus()
    {
        return $this->call_status;
    }

    public function getCalled()
    {
        return $this->called;
    }

    public function getCalledCity()
    {
        return $this->called_city;
    }

    public function getCalledCountry()
    {
        return $this->called_country;
    }

    public function getCalledState()
    {
        return $this->called_state;
    }

    public function getCalledZip()
    {
        return $this->called_zip;
    }

    public function getCaller()
    {
        return $this->caller;
    }

    public function getCallerCity()
    {
        return $this->caller_city;
    }

    public function getCallerCountry()
    {
        return $this->caller_country;
    }

    public function getCallerState()
    {
        return $this->caller_state;
    }

    public function getCallerZip()
    {
        return $this->caller_zip;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function getFrom()
    {
        return $this->from;
    }

    public function getFromCity()
    {
        return $this->from_city;
    }

    public function getFromCountry()
    {
        return $this->from_country;
    }

    public function getFromState()
    {
        return $this->from_state;
    }

    public function getFromZip()
    {
        return $this->from_zip;
    }

    public function getTo()
    {
        return $this->to;
    }

    public function getToCity()
    {
        return $this->to_city;
    }

    public function getToCountry()
    {
        return $this->to_country;
    }

    public function getToState()
    {
        return $this->to_state;
    }

    public function getToZip()
    {
        return $this->to_zip;
    }

    public function getCallerName()
    {
        return $this->caller_name;
    }

    public function getForwardedFrom()
    {
        return $this->forwarded_from;
    }
}