<?php

require __DIR__ . '/vendor/autoload.php';

use Otp\Otp;
use ParagonIE\ConstantTime\Encoding;
use Otp\GoogleAuthenticator;


function auth2EstActive ($id) {

    include("configdb.php");

    $reqRecupDoubleAuth = $linkpdo->prepare('SELECT auth2 FROM user WHERE idUser = :id');

    $reqRecupDoubleAuth->execute(array('id'=>$id));

    $result = $reqRecupDoubleAuth->fetch();

    return $result['auth2'];

}


function totp () {

    if (isset($_POST['envoyer'])){

        $otp = new Otp();

        if ($otp->checkTotp(Encoding::base32DecodeUpper($_SESSION['secret']), $_POST['code'])) {
          //Code fonctionen avec qrcode

            $_SESSION['msg'] = "Vous êtes connectés !";
            $_SESSION['double_auth'] = true;
            
            

        } else {
            //Code fonctionne pas
            $_SESSION['msg'] = "Ce code ne correspond pas";
        }

    }

    $secret = GoogleAuthenticator::generateRandom();
    $_SESSION['secret'] = $secret;

    $qrCodeUrl = GoogleAuthenticator::getQrCodeUrl('totp', 'Login qr code Sauveteur en mer', $secret);

    return $qrCodeUrl;
}



?>