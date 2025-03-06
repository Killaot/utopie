<?php include '../back/connexion.php'; ?>
<link rel="stylesheet" href="../styles/logo.css">
<nav class="navbar">
    <?php if (isset($_SESSION['id'])) { ?>
    <div class="nav-title">
    <span><img class="petitlogo" src="../assets/petitlogo.png">l'Utopie</span>
    </div>
    <div class="nav-content">
        <ul>
            <li><a href="../index.php">ACCUEIL</a></li>
            <li><a href="./about.php">A PROPOS</a></li>
            <li><a href="./Menu_food.php">MENU</a></li>
            <li><a href="./personnalisation.php">PERSONNALISATION</a></li>
            <li><a href="./deconnexion.php">DECONNEXION</a></li>
            <li><i id="close" class="fa-solid fa-xmark"></i></li>
        </ul>
    </div>
    <div class="mobile">
        <i class="bar fa-solid fa-utensils"></i>
    </div>
    <?php }  
else { ?>
    <div class="nav-title">
    <span><img class="petitlogo" src="../assets/petitlogo.png">l'Utopie</span>
    </div>
    <div class="nav-content">
        <ul>
            <li><a href="../index.php">ACCUEIL</a></li>
            <li><a href="./about.php">A PROPOS</a></li>
            <li><a href="./Menu_food.php">MENU</a></li>
            <li><i id="close" class="fa-solid fa-xmark"></i></li>
        </ul>
    </div>
    <div class="mobile">
        <i class="bar fa-solid fa-utensils"></i>
    </div>
    <?php }  ?>