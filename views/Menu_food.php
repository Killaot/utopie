<!DOCTYPE html>
<!--divinectorweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Menu of CSS</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">-->
    <link href="../styles/Menu_food.css" rel="stylesheet">
    <link href="../styles/menue.css" rel="stylesheet">
    <link href="../styles/menuetest.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="icon" type="image/x-icon" href="/assets/android-chrome-192x192.png">
    <link rel="icon" type="image/x-icon" href="/assets/petitlogo.png">
    <link rel="shortcut icon" href="../assets/petitlogo.png" type="image/x-icon">
    <link rel="icon" href="../assets/petitlogo.png">
    <link rel="stylesheet" href="./styles/footer.css">

    <?php include '../back/bMenu.php' ; ?>


</head>

<body>
    <header style="position: fixed; top: 0; left: 0; right: 0; z-index: 999;">
        <?php include './navbar.php' ?>
    </header>
    <section>


        <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
            <div class="carousel-indicators">
                <button aria-label="Slide 1" class="active" data-bs-slide-to="0"
                    data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2"
                    data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button
                    aria-label="Slide 0" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators"
                    type="button"></button>
                    
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img alt="..."  src="../assets/four.png">
                    <!-- <div class="carousel-img-container"></div> -->
                    <div class="carousel-caption">
                        <h5 class="animated bounceInRight">Cassolette de saint Jacques</h5>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img alt="..."  src="../assets/cafeg.png">
                    <!-- <div class="carousel-img-container"></div> -->
                    <div class="carousel-caption">
                        <h5 class="animated bounceInRight">Café Gourmand</h5>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img alt="..."  src="../assets/cuisse.png">
                    <!-- <div class="carousel-img-container"></div> -->
                    <div class="carousel-caption">
                        <h5 class="animated bounceInRight">Jarret</h5>
                        
                    </div>
                </div>
                
            </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
                type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
                    class="visually-hidden">Previous</span></button> <button class="carousel-control-next"
                data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true"
                    class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
        </script>
    </section>
    <section>
        <div class="container">
            <?php foreach ($row as $categorie): ?>
            <div class="box">
                <div class="row">
                    <h4 id="ligne" class="color">
                        <strong><?php echo ($categorie["nom"]) ?>:</strong>
                    </h4>
                    <?php
              $idCat = $categorie["idCat"];
              $stmt = $db->prepare('SELECT * FROM plats WHERE idCat ="'.$idCat.'"');
              $stmt->execute();
              $idCat = $stmt->fetchAll(PDO::FETCH_ASSOC);
              foreach ($idCat as $platsss):
                if (is_null($platsss["prix"])) {
            ?>
                    <h6 class="color2"><?php echo ($platsss["nom"]) ?></h6>
                    <?php
                } else {
                ?>
                    <h5 style="display: flex; justify-content: space-between;">
                        <?php echo ($platsss["nom"]) ?>
                        <?php echo ($platsss["prix"]), '€' ?>
                    </h5>
                    <?php
                }
            ?>
                    <p><?php echo ($platsss["ingredients"]) ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </section>
</body>

</html>
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
        
    </footer>
</body>
<script src="../js/nav.js"></script>

</html>
