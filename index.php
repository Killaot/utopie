<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="styles/foodcategory.css">
    <link rel="stylesheet" href="./styles/logo.css">
    <link rel="icon" type="image/x-icon" href="/assets/petitlogo.png">
    <link rel="shortcut icon" href="./assets/petitlogo.png" type="image/x-icon">
    <link rel="icon" href="./assets/petitlogo.png" type="image/x-icon">


    <title>l'Utopie</title>
</head>

<body>
    <header style="position: fixed; top: 0; left: 0; right: 0; z-index: 999;">
        <nav class="navbar">
            <div class="nav-title">
                <span><img class="petitlogo" src="./assets/petitlogo.png">l'Utopie</span>
            </div>
            <div class="nav-content">
                <ul>
                    <li><a href="./index.php">ACCUEIL</a></li>
                    <li><a href="./views/about.php">A PROPOS</a></li>
                    <li><a href="./views/Menu_food.php">MENU</a></li>
                    <li><i id="close" class="fa-solid fa-xmark"></i></li>
                </ul>
            </div>
            <div class="mobile">
                <i class="bar fa-solid fa-utensils"></i>
            </div>
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="landing-hero">
            
                <h3><span class="food"style="color: var(--clr-main-theme);">Dans le joli bourg de Plouaret,</span> venez partager un bon moment en famille ou entre amis. Gwendoline et Fabrice vous accueillent dans une ambiance chaleureuse et cocooning.
l'Utopie vous propose une cuisine traditionnelle avec des assiettes gourmandes composées de produits "faits maison".
Laissez vous également tenter par nos savoureuses pizzas. Leurs pâtes fines et leurs garnitures vous feront fondre de plaisir!!!!

            </div>
            <!-- <button class="btn get-started"><a href="#">Get Started</a></button> -->
            <div class="landing-img">
                <img class="one" src="./assets/chevre.png" alt="">
                <img class="two" src="./assets/poisson.png" alt="">
                <img class="three" src="./assets/frite.png" alt="">
            </div>
        </section>
        <section class="below-hero">
            <div class="about-heading">
                <div class="heading-img"><img
                src="./assets/patron.jpg"
                        width="500" alt=""></div>
                <div class="heading-content">

                    <h2>Quelle est la particularité de nos services ?</h2>
                    <p class="heading-description">Nous sommes convaincus que la clé de notre entreprise réside dans nos
                        clients et leur confiance. C'est pourquoi nous ne faisons jamais de compromis sur les produits.
                        Nous travaillons avec des produit frais et de saison.
                        </p>
                </div>
            </div>
        </section>
        
        
        <section class="categories">
            <p class="sub-title">Où sommes nous ?</p>
            <h2>Rue Louis Prigent, 22420 Plouaret</h2>
            <div class="cat-container">
                <div class="col-l-4">
                    <div class="cat-description fixedindian">
                        <br><br><br>
                        <h5>Notre restaurant</h5>
                        <p>Voici nôtre restaurant situé à Rue Louis Prigent, 22420 Plouaret 
                            , nous pouvons accueillir jusqu'à 34 personnes, nous proposons des pizza , des viandes dès poisson , de la choucroute de la mer sur place ou à emporter  . Penser à réserver en nous appelant au 0296474364
                        </p>
                        
                    </div>
                    <div class="cat-img moveupindian"><img
                            src="./assets/devanture.png"
                            width="400" alt=""></div>
                </div>
                <div class="col-l-4">
                    <div class="cat-img"><img src="./assets/salle1.png" width="500" alt=""></div>
                    
                    <div class="cat-img"><img src="./assets/salle2.png" width="500" alt=""></div>
                </div>
                
            </div>
        </section>
       

    </main>
    <footer>
        <div class="footer-container">
            <div class="about-us">
                <h2>À propos</h2>
                <p class="company-name">l'Utopie</p>
                <p class="company-description">Le rêve devenue réalité</p>
                <i class="fas fa-map-marker-alt"></i><span>Rue Louis Prigent, 22420 Plouaret</span>

            </div>
            <div class="contact-us">
                <h2>Nous contacter</h2>
                <ul>
                    <li class="mobile-no"><i class="fas fa-phone-alt"></i><span>0296474364</span></li>
                    <li class="e-mail"><i class="fas fa-envelope">
                        </i><span><a href="mailto:dsc@kgec.edu.in">lutopie.plouaret@orange.fr</a>
                    </li>
                </ul>
            </div>
            <div class="follow-us">
                <h2>Nous trouver</h2>
                <div class="social-links">

                    
                    <a class="youtube"
                        href="https://www.google.com/maps/place/Restaurant+L+UTOPIE/@48.6115694,-3.4735825,15z/data=!4m6!3m5!1s0x4811814f6bb64c03:0x7e8ff3e0225c95ec!8m2!3d48.6115694!4d-3.4735825!16s%2Fg%2F11t5y503t8">
                        <i class="fas fa-map-marker-alt"></i></a>

                </div>
            </div>
        </div>
        <div class="copyright">
            <p>© Copyright 2021 - Seat&Eat</p>
        </div>
        <script>
        // Sélectionnez tous les éléments avec la classe "petitlogo"
        var logos = document.querySelectorAll('.petitlogo');

        // Initialisez un compteur de clics
        var clics = 0;

        // Ajoutez un gestionnaire d'événements de clic à chaque élément "petitlogo"
        logos.forEach(function(logo) {
            logo.addEventListener('click', function(event) {
                // Incrémentez le compteur de clics
                clics++;

                // Vérifiez si le nombre de clics est égal à 5
                if (clics === 5) {
                    // Ouvrez la page dans une nouvelle fenêtre ou un nouvel onglet
                    window.open('./views/connexion.php', '_blank');

                    // Réinitialisez le compteur de clics
                    clics = 0;
                }
            });
        });
    </script>
    </footer>

</body>
<script src="js/nav.js"></script>

</html>