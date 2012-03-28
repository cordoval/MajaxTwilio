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
  'CallerState' => 'CA',
  'CallSid' => 'CAddce5580ec424ca6b7800175c5da646d',
  'CalledState' => 'MI',
  'From' => '+14155992671',
  'CallerZip' => '94949',
  'FromZip' => '94949',
  'CallStatus' => 'completed',
  'ToCity' => 'LANSING',
  'ToState' => 'MI',
  'To' => '+15178033009',
  'CallDuration' => '9',
  'ToCountry' => 'US',
  'CallerCity' => 'NOVATO',
  'ApiVersion' => '2010-04-01',
  'Caller' => '+14155992671',
  'CalledCity' => 'LANSING',
  'RecordingUrl' => 'http://www.example.com',
  'RecordingSid' => '23lkj1234lk12j3l12kj3',
  'RecordingDuration' => '3',
  'DialCallStatus' => 'completed',
  'DialCallSid' => '3203l3223lkj3',
  'DialCallDuration' => '34',
)
 */


class Majax_Twilio_Client_Status_DialCallResponse extends Majax_Twilio_Client_Incoming_CallRequest
{
    private $dial_call_status;
    private $dial_call_sid;
    private $dial_call_duration;
    private $recording_url;
    private $recording_sid;
    private $recording_duration;

    public function __construct($vars)
    {
        $this->dial_call_status = $vars['DialCallStatus'];
        $this->dial_call_sid = $vars['DialCallSid'];
        if (isset($vars['DialCallDuration']))
            $this->dial_call_duration = $vars['DialCallDuration'];

        if (isset($vars['RecordingUrl']))
            $this->recording_url = $vars['RecordingUrl'];
        if (isset($vars['RecordingSid']))
            $this->recording_sid = $vars['RecordingSid'];
        if (isset($vars['RecordingDuration']))
            $this->recording_duration = $vars['RecordingDuration'];
    }

    public function getDialCallDuration()
    {
        return $this->dial_call_duration;
    }

    public function getDialCallSid()
    {
        return $this->dial_call_sid;
    }

    public function getDialCallStatus()
    {
        return $this->dial_call_status;
    }

    public function getRecordingUrl()
    {
        return $this->recording_url;
    }

    public function getRecordingDuration()
    {
        return $this->recording_duration;
    }

    public function getRecordingSid()
    {
        return $this->recording_sid;
    }

}