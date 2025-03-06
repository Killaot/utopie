<?php
include '../testmysql.php'; 
session_start();
$show = false;

// Si l'utilisateur a soumis le formulaire, il est alors possible de
// faire les traitements sur les valeurs saisies 
if (isset($_POST['connexion'])) {
    
    // Récupération du nom et du mot de passe
    $nom = $_POST['nom'];  // Utiliser le nom de l'utilisateur

    $motdepasse = $_POST['motdepasse'];

    // Vérification dans la base de données avec le nom d'utilisateur
    $stmt = $db->prepare("SELECT * FROM utilisateur WHERE nom=:nom");

    // Lier les paramètres à la requête avec vérification du type
    $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!empty($nom) && !empty($motdepasse)) {
        if ($stmt->rowCount() > 0) {   
            // Vérification du mot de passe
            if (password_verify($motdepasse, $row["mdp"])) {
                $show = true;
                $color = "success";
                $message = "Connexion réussie, redirection dans 3 secondes...";
                
                // Initialisation des variables de session nécessaires
                $_SESSION['nom'] = $row['nom'];
                $_SESSION['id'] = $row['id'];
                
                // Redirection après connexion réussie
                header("refresh:1; ../index.php");
                
            } else {   // Mot de passe incorrect
                $show = true;
                $color = "danger";
                $message = "Mot de passe incorrect.";
            }
        } else {   // Nom incorrect
            $show = true;
            $color = "danger";
            $message = "Le nom d'utilisateur est incorrect.";
        }
    }        
}
?>
