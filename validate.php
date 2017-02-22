<?php
require 'vendor/autoload.php';
$authenticator = new PHPGangsta_GoogleAuthenticator();
 

$secret=$_POST["secret"];
$otp=$_POST["otp"];

echo $secret."==";
echo $otp;
 
$tolerance = 0;
    //Every otp is valid for 30 sec.
    // If somebody provides OTP at 29th sec, by the time it reaches the server OTP is expired.
    //So we can give tolerance =1, it will check current  & previous OTP.
    // tolerance =2, verifies current and last two OTPS
 
$checkResult = $authenticator->verifyCode($secret, $otp, $tolerance);    
 
if ($checkResult) 
{
    echo 'VALID';
     
} else {
    echo 'FAILED';
}
 
?>
