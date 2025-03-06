<?php
include '../testmysql.php'; 



$reqTel = $db->prepare("SELECT * FROM utilisateur");
$reqTel->execute();
$pseudo = $reqTel->fetchAll();



$reqSQLpseudo = $db->prepare("UPDATE utilisateur SET mdp = :mdp WHERE id = :id ");



foreach($pseudo as $pseudos)
    {
        $mdp=$pseudos['mdp'];
    $mdp=password_hash($mdp, PASSWORD_DEFAULT, ['cost'=> 14]);

    


    $reqSQLpseudo->bindValue(":id", $pseudos["id"],PDO::PARAM_INT);
    $reqSQLpseudo->bindValue(":mdp", $mdp, PDO::PARAM_STR);

    $reqSQLpseudo->execute();

    $texte_chiffre = "Error";
}




?>