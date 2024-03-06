<?php

namespace App\Modules\Main\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Exception;

class SendSmsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $config;
    private $data;

    
    public function __construct($data = [], $config = [])
    {
        $this->data = (object) $data;
        if (!empty($config)) {
            $this->config = $config;
        } else {
            $this->config = config("common.sms_service");
        }
    }

    /**
     * Execute the job.
     *
     * @return boolean
     */
    public function handle(): void
    {    
        try {

            if (empty($this->data->msisdn) || empty($this->data->sms_body)) {
                Log::error("SendSmsJob@handle - Validation Error: msisdn & sms_body data are required! requested - " . json_encode($this->data));
                return;
            }

            if (empty($this->config)) {
                Log::error("SendSmsJob@handle - no configuration found, please check the sms_service configuration. - " . json_encode($this->config));
                return;
            }

            // COMMON VARIABLES 
            $msisdn  = msisdn($this->data->msisdn ?? null);
            $smsBody = $this->data->msisdn ?? null;
            $config  = $this->config;

            // call API to send SMS
            $this->callApi($msisdn, $smsBody, $config);

        } catch(Exception $e) {
            Log::error("SendSmsJob@handle - Error: ". $e->getMessage() . ", Line - ".$e->getLine());
            return;
        }
    }


    private function callApi($msisdn, $smsBody, $config = [])
    {
        $url    = $config['url'] ?? null;
        $params = json_encode([
            "api_token" => $config['api_token'] ?? null,
            "sid"       => $config['sid'] ?? null,
            "msisdn"    => $msisdn,
            "sms"       => $smsBody,
            "csms_id"   => getRandomString(16),
        ]);

        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($params),
            'accept:application/json'
        ));

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            $errorMessage = curl_error($ch);
            Log::error("SendSmsJob@handle - cURL Error: ". $errorMessage);   
        }
        curl_close($ch);

        return $response;
    }

}
