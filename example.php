<?php

    require_once('sendsms.php');

    //to send a single message
    $phonenumber = "923452154853";
    $message = "message text";
    $result = sendsms($phonenumber,$message);

    //to send multiple people single message
    $phonenumbers = ['923453333333','923335555555','923135544559'];
    $message = 'message text';
    $result = [];
    for ($i = 0;$i<len($phonenumbers);$i++)
    {
        $result[$i]=sendsms($phonenumbers[$i],$message);
    }

    //to send multiple people different messages
    $phonenumbers = ['923453333333','923335555555','923135544559'];
    $messages = ['message text 1', 'message text 2','message text 3'];
    $result = [];
    for ($i = 0;$i<len($phonenumbers);$i++)
    {
        $result[$i]=sendsms($phonenumbers[$i],$messages[$i]);
    }

?>
