<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

$username = "sandbox";
$apiKey = "2607d14a0f69a5bea0ee61b213dcb2bdb5675cbc0e0375625d77eb7ccd1cee86";

$AT = new AfricasTalking($username, $apiKey);

$airtime = $AT->airtime();



    $recipients = [[
    "phoneNumber"  => $_POST["phone"],
    "currencyCode"       => "KES",
    "amount"       =>$_POST["amount"]
    ]];
    try {
        $results = $airtime->send([
            "recipients" => $recipients
        ]);
        print_r($results);
    } catch(Exception $e) {
        echo "Error: ".$e->getMessage();
    }

