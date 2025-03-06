<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="../styles/contact.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="icon" type="image/x-icon" href="/assets/petitlogo.png">
    <link rel="shortcut icon" href="../assets/petitlogo.png" type="image/x-icon">
    <link rel="icon" href="../assets/petitlogo.png">

    <title>Contact Us</title>
</head>

<body>
    <header style="position: fixed; top: 0; left: 0; right: 0; z-index: 999;">
        <?php include './navbar.php' ?>
    </header>
    <main>
        <section>
            <div class="main-container container">
                <div class="information-container">
                    <div class="info_heading">
                        <h1>Get In Touch</h1>
                        <p>Fill up the form and our team will get back to you within 24 hours</p>
                    </div>
                    <div class="info_links">
                        <p><span><i class="fas fa-phone-alt"></i></span>+917584912300</p>
                        <p><span><i class="fas fa-envelope"></i></span><a href="mailto:dsc@kgec.edu.in">
                                dsc@kgec.edu.in</a></p>
                        <p><span><i class="fas fa-map-marker-alt"></i></span>Kalyani, Nadia, West Bengal,
                            Pin - 741235</p>
                    </div>
                    <div class="info_socials">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="form-container">
                    <form action="form.php">
                        <div class="main-form">
                            <div class="name">
                                <h2>Your Name</h2>
                                <div class="input">
                                    <label for="name"><i class="far fa-user"></i></label>
                                    <input type="text" id="name" name="name" autocomplete>
                                </div>
                            </div>
                            <div class="email">
                                <h2>Mail</h2>
                                <div class="input">
                                    <label for="e-mail"><i class="far fa-envelope"></i></label>
                                    <input type="text" id="e-mail" name="e-mail" autocomplete>
                                </div>
                            </div>
                            <div class="msg">
                                <h2>Message</h2>
                                <div class="input">
                                    <textarea name="message" id="message" cols="20" rows="5" placeholder="Message us"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="button"><button class="btn send-msg"><a href="#">Send Message</a></button></div>
                        </div>
                    </form>
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
        
    </footer>
</body>
<script src="../js/nav.js"></script>

</html>