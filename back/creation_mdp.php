<?php
///Création clé tel
$cle_secrete_pseudo = random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);



$nonce_pseudo = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);



$cle_secrete_pseudo = base64_encode($cle_secrete_pseudo);


$nonce_pseudo =base64_encode($nonce_pseudo);


file_put_contents('codesecret.txt', "\n  $cle_secrete_pseudo.$nonce_pseudo
", FILE_APPEND);

?>