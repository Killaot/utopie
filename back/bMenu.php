<?php
include '../testmysql.php';


$stmt = $db->prepare("SELECT * FROM categorie ");

    
// Lier les paramètres à la requête avec vérification du type
// pour rechercher si l'utilisateur a bien un mot de passe dans la passe

$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);  
?>