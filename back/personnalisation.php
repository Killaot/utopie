<?php
include '../testmysql.php';


$stmt = $db->prepare("SELECT * FROM plats ");

    
// Lier les paramètres à la requête avec vérification du type
// pour rechercher si l'utilisateur a bien un mot de passe dans la passe

$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);  

$stmt = $db->prepare("SELECT * FROM categorie ");

    
// Lier les paramètres à la requête avec vérification du type
// pour rechercher si l'utilisateur a bien un mot de passe dans la passe

$stmt->execute();
$cat = $stmt->fetchAll(PDO::FETCH_ASSOC); 

if (isset($_POST['supprimer'])) {
    
    $sql = "DELETE FROM plats WHERE idPlat = :idplats";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':idplats', $_POST['idplats']);
    $stmt->execute();
    header("Location: ../views/personnalisation.php");
}
if (isset($_POST['modifier'])) {
    $sql = "UPDATE plats SET nom = :nom ,ingredients = :ingredients ,prix =:prix  WHERE idPlat = :idPlat";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':idPlat', ($_POST['idPlat']));
    $stmt->bindParam(':nom', ($_POST['nom']));
    $stmt->bindParam(':ingredients', ($_POST['ingredients']));
    $stmt->bindParam(':prix', ($_POST['prix']));
    

    $stmt->execute();
    header("Location: ../views/personnalisation.php");
}
if (isset($_POST['ajouter'])) {
    $sql="INSERT INTO plats (idCat,nom,ingredients,prix) VALUES (:idCat,:nom,:ingredients,:prix)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':idCat', ($_POST['Categorie']));
    $stmt->bindParam(':nom', ($_POST['nom']));
    $stmt->bindParam(':ingredients', ($_POST['ingredients']));
    $stmt->bindParam(':prix', ($_POST['prix']));
    $stmt->execute();
    header("Location: ../views/personnalisation.php");
}
?>