<?php
include '../testmysql.php';


$stmt = $db->prepare("SELECT * FROM plat ");

    
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
    
    $sql = "DELETE FROM plat WHERE id = :idPlat";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':idPlat', $_POST['idPlat']);
    $stmt->execute();
    header("Location: ../views/personnalisation.php");
}
if (isset($_POST['modifier'])) {
    $sql = "UPDATE plat SET nom = :nom ,ingredient = :ingredient ,prix =:prix,emplacement =:emplacement  WHERE id = :id";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', ($_POST['id']));
    $stmt->bindParam(':nom', ($_POST['nom']));
    $stmt->bindParam(':ingredient', ($_POST['ingredient']));
    $stmt->bindParam(':prix', ($_POST['prix']));
    $stmt->bindParam(':emplacement', ($_POST['emplacement']));

    $stmt->execute();
    header("Location: ../views/personnalisation.php");
}
if (isset($_POST['ajouter'])) {
    $sql="INSERT INTO plat (idCat,nom,ingredient,prix,emplacement) VALUES (:idCat,:nom,:ingredient,:prix,:emplacement)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':idCat', ($_POST['Categorie']));
    $stmt->bindParam(':nom', ($_POST['nom']));
    $stmt->bindParam(':ingredient', ($_POST['ingredient']));
    $stmt->bindParam(':prix', ($_POST['prix']));
    $stmt->bindParam(':emplacement', ($_POST['emplacement']));
    $stmt->execute();
    header("Location: ../views/personnalisation.php");
}
?>