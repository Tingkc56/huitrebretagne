<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <!-- style sheet -->
    <link rel="stylesheet" href="app\public\front\css\style.css">
    <!-- Bootstrap CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Huîltre Bretagne</title>
</head>

<body>
    <header>
        <div class="navbar-background">
            <nav class="navbar container flex-wrapper">
                <div><a href="/" class="nav-logo"><img class="logo img-br-10px" src="APP\public\front\images\huitre-bretagne.png"
                            alt="logo huitre bretagne"></a> <span class="text-logo">HUITRE BRETAGNE</span> </div>
                <div class="navbar-toggler">
                    <!-- data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" -->
                    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                </div>
                <div class="navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-ul">
                        <li class="nav-li flex-6-item-perline"><a class="nav-a" href="/">Accueil</a></li>
                        <li class="nav-li flex-6-item-perline"><a class="nav-a"
                                href="index.php?action=huitres">Huitres</a></li>
                        <li class="nav-li flex-6-item-perline"><a class="nav-a"
                                href="index.php?action=producers">Producteurs</a></li>
                        <li class="nav-li flex-6-item-perline"><a class="nav-a" href="index.php?action=blog">Blog</a>
                        </li>
                        <li class="nav-li flex-6-item-perline"><a class="nav-a"
                                href="index.php?action=contact">Contact</a></li>
                        <?php if(isset($_SESSION['pseudo'])): ?>
                        <li class="nav-li flex-6-item-perline">
                            <a class="nav-a" href="index.php?action=userInfos"><?= $_SESSION['pseudo'] ?></a>
                            <a class="nav-a" href="index.php?action=disConnect">Deconnexion</a>
                        </li>
                        <?php else: ?>
                        <li class="nav-li flex-6-item-perline">
                            <a class="nav-a" href="index.php?action=connect">Connexion</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
            <div class="nav-bottom-line"></div>
        </div>

    </header>

    <main>
        <div class="container">
            <?= $content ?>
        </div>
    </main>

    <footer>
        <div class="foot-backgroud">
            <div class="food-top-line"></div>
        <div class="nav-footer flex-wrapper container">
            <div class="flex-2-item-perline">
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="index.php?action=huitres">Huitres</a></li>
                    <li><a href="index.php?action=producers">Producteurs</a></li>
                    <li><a href="index.php?action=blog">Blog</a></li>
                    <li><a href="index.php?action=contact">Contact</a></li>
                </ul>
            </div>
            <div class="flex-2-item-perline">
                <h4>Suivez-nous</h4>
                <ul>
                    <li><a href="/"></a>Facebook</li>
                    <li><a href="/"></a>Pinterest</li>
                    <li><a href="/"></a>Instagram</li>
                </ul>
            </div>
        </div>
        <div>
            <div class="footer_top container">
                Tous doits réservés à 2021 - Huitre Bretagne - Tingting
            </div>
        </div>
        </div>
    </footer>


    <!-- js -->
    <script src="app\public\front\js\validateForm.js"></script>
    <script src="app\public\front\js\categoryBlog.js"></script>
    <script src="app\public\front\js\burger.js"></script>
    <script src="app\public\front\js\adressApi.js"></script>


</body>

</html>