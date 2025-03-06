<?php
include '../testmysql.php'; 
session_start();
$show = false;


//Si l'utilisateur a soumis le formulaire, il est alors possible de
// faire les traitements sur les valeurs saisies 
if (isset($_POST['connexion']))
   {
       
    $pseudo = $_POST['pseudo'];



    $motdepasse = $_POST['motdepasse'];
    // vérification dans la base selon le type d'utilisateur

    $stmt = $db->prepare("SELECT * FROM utilisateur WHERE pseudo=:pseudo");

    
    // Lier les paramètres à la requête avec vérification du type
    // pour rechercher si l'utilisateur a bien un mot de passe dans la passe
    $stmt->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    
    if (!empty($pseudo) && !empty($motdepasse)) {
        if ($stmt->rowCount() > 0) {   
            // Vérification que les mots de passe et mail soiennt identiques       
            if (password_verify($motdepasse, $row["mdp"])) {
                $show = true;
                $color = "success";
                $message = "Connexion réussie, redirection dans 3 secondes...";
                // initialisation des variables de session nécessaires
                // à la suite des traitements
                $_SESSION['pseudo'] = $row['pseudo'];
                
                $_SESSION['id'] = $row['id'];
                
                header("refresh:1; ../index.php");
                
            } else {   // affichage des erreurs, cybersécurité??
                $show = true;
                $color = "danger";
                $message = "Mot de passe incorrect.";
            }
        } else {   // affichage des erreurs, cybersécurité??
            $show = true;
            $color = "danger";
            $message = "L'identifiant est incorect.";
        }
    }        
}