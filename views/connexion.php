<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/x-icon" href="/assets/petitlogo.png">
    <link rel="shortcut icon" href="../assets/petitlogo.png" type="image/x-icon">
    <link rel="icon" href="../assets/petitlogo.png">

<head>
    <?php include "../back/connexion.php"?>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Location facile et sécurisé !</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../styles/login-styles.css" rel="stylesheet" />

</head>

<body class="login-page err-500">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="main-panel">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                                <!--   NR le 24/12/2020
                                //  préparation de l'affichage de la zone de messages
                                -->
                                <h4>Connexion</h4>
                                <hr>
                                <h6 class="font-weight-light">Veuillez saisir vos identifiant et mot de passe Admin</h6>
                                <?php if($show == true) { 
                                    echo '
                                    <p class="mt-3 text-'.$color.'">'.$message.'</p>
                                    ';} 
                                ?>
                                <!--   NR le 24/12/2020
                                //  formulaire de saisie des informations nécessaires à la connexion
                                -->
                                <form method="POST" id="connexion" class="mt-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" id="pseudo" name="pseudo"
                                            placeholder="Identifiant" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg" id="motdepasse"
                                            name="motdepasse" placeholder="Mot de passe" required>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" name="connexion" id="connexion"
                                            class="btn btn-block btn-primary btn-lg">Connexion</button>
                                    </div>
                                    <div class="text-center mt-4 font-weight-light">
                                        Retour à <a href="../index.php" class="text-primary">l'accueil</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>