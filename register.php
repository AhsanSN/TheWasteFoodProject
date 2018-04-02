<?php
    
    //to send a single message
    if (isset($_POST['announce'])){
        $phonefile = fopen("./phoneno.txt",'r');
        $phonenumbers =array();
        while(!feof($phonefile)) {
              $phonenumbers[]= fgets($phonefile);
        }
        fclose($phonefile);
        $message = "\nThe Waste Food Project\nName: ".$_POST['name']."\n Address: ".$_POST['address']."\nCNIC: ".$_POST['cnic']."\nContact: ".$_POST['contact']."\nFood Description: ".$_POST['fdescription'];
        require_once('sendsms.php');
        //to send multiple people single message
        $result = [];
        for ($i = 0;$i<sizeof($phonenumbers);$i++)
        {
            $result[$i]=sendansms($phonenumbers[$i],$message);
        }

    }
    header("location: donate.html");

?>
