<?php
include '../testmysql.php'; 



$reqnom = $db->prepare("SELECT * FROM utilisateur");
$reqnom->execute();
$pseudo = $reqnom->fetchAll();
$bloc='..\back\codesecret.txt';
        $bloc=file_get_contents($bloc);
        $bloc=explode(".",$bloc);

        $cle_secrete_nom = base64_decode($bloc[0]);

        
        $nonce_nom =base64_decode($bloc[1]);

        
        





$reqSQLpseudo = $db->prepare("UPDATE utilisateur SET nom = :nom WHERE id = :id ");



foreach($pseudo as $pseudos)
    {
        $nom=$pseudos['nom'];

        $texte_chiffre_nom = sodium_crypto_secretbox($nom, $nonce_nom, $cle_secrete_nom);

        
        $texte_chiffre_nom=base64_encode($texte_chiffre_nom);


    $reqSQLpseudo->bindValue(":id", $pseudos["id"],PDO::PARAM_INT);
    $reqSQLpseudo->bindValue(":nom", $nom, PDO::PARAM_STR);

    $reqSQLpseudo->execute();

    $texte_chiffre = "Error";
}




?>