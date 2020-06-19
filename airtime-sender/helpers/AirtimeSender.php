<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;


class AirtimeSender{
    protected $username;
    protected $apiKey;

    protected function initialize_credentials(){
        $this->username = "sandbox";
        $this->apiKey = "2607d14a0f69a5bea0ee61b213dcb2bdb5675cbc0e0375625d77eb7ccd1cee86";
    }

    protected function airtimeObj(){
        $this->initialize_credentials();
        $AT = new AfricasTalking($this->username, $this->apiKey);

        $airtime = $AT->airtime();

        return $airtime;
    }

    public function sendAirtime($phone, $amount){
        //get airtime object
        $airtime = $this->airtimeObj();

        $recipients = [[
        "phoneNumber"  => $phone,
        "currencyCode"       => "KES",
        "amount"       =>$amount
        ]];
        try {
            $results = $airtime->send([
                "recipients" => $recipients
            ]);
            return ($results);
        } catch(Exception $e) {
            return "Error: ".$e->getMessage();
        }

    }

}








