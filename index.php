<?php
// header
// block ::1 (localhost ipv6 addr ) 

header ("server: MyWeb 1.0"); // fun server header
$ip = $_SERVER["REMOTE_ADDR"];

//echo $ip ; 
if ($ip == "::1") {  // blocklisted IP.
        echo "You are not allowed!!";
        echo "\r\n"; 
        echo "Your IP is: " + $ip;
        die();
}
else {
        echo "welcome to our super bad coding page";
        echo "\r\n"; 
        echo "Your IP is: " + $ip;
}



?>
