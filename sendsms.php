<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

function sendansms($phonenumber,$message){
    // Your Account SID and Auth Token from twilio.com/console
    $sid = 'AC73d8157f3ace440379a9fc5dd5a293e6';
    $token = '6a1a8efad9703c7ceeef96bd5bc65dc6';
    $client = new Client($sid, $token);
    
    // Use the client to do fun stuff like send text messages!
    $client->messages->create(
        // the number you'd like to send the message to
        $phonenumber,
        array(
            // A Twilio phone number you purchased at twilio.com/console
            'from' => '+17542081382',
            // the body of the text message you'd like to send
            'body' => $message
        )
    );
}
?>