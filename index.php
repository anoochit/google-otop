<?php

require 'vendor/autoload.php';
$authenticator = new PHPGangsta_GoogleAuthenticator();
$secret = $authenticator->createSecret();
echo "Secret: ".$secret."\n";  //save this at server side
 
 
$website = 'localhost'; //Your Website
$title= 'sample';
$qrCodeUrl = $authenticator->getQRCodeGoogleUrl($title, $secret,$website);

?>
<img src="<?=$qrCodeUrl; ?>">
<!--- adhoc validate -->
<form method="post" action="validate.php">
<input type="hidden" name="secret" value="<?=$secret; ?>"/> 
<input type="text" name="otp" >
<input type="submit" >
</form>
