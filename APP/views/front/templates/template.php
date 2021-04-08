<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <!-- style sheet -->
    <link rel="stylesheet" href="app\public\front\css\style.css">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Huîltre Bretagne</title>
</head> 

<body>
    <header>
        <div class="container-fluid">
            <nav class="row nav-bar">
                <div class="col-5">
                    <img src="" alt="logo huitre bretagne">
                </div>
                <ul class="burger-ul row col-7">
                    <li class="col"><a href="/">Accueil</a></li>
                    <li class="col"><a href="index.php?action=huitres">Nos Huitres</a></li>
                    <li class="col"><a href="index.php?action=producers">Nos Producteurs</a></li>
                    <li class="col"><a href="index.php?action=blog">Blog</a></li>
                    <li class="col"><a href="index.php?action=contact">Contact</a></li>
<?php if(isset($_SESSION['pseudo'])): ?>
                    <li class="col"><a href="index.php?action=userInfos"><?= $_SESSION['pseudo'] ?></a>
                    <a href="index.php?action=disConnect">Deconnexion</a></li>
<?php else: ?>
                    <li class="col"><a href="index.php?action=connect">Connexion</a></li>
<?php endif; ?>
                </ul>
                <!-- <div id="burger"> <i class="fa fa-bars"></i></div> -->
            </nav>
        </div>
    </header>

    <main>
        <div class="container-fluid">
            <?= $content ?>
        </div>
    </main>

    <footer>
        <div class="container-fluid">
        <div class="nav-footer row">
            <div class="col">
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="index.php?action=huitres">Nos Huitres</a></li>
                    <li><a href="index.php?action=producers">Nos Producteurs</a></li>
                    <li><a href="index.php?action=blog">Blog</a></li>
                    <li><a href="index.php?action=contact">Contact</a></li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="index.php?action=huitre">Nos Huitres</a></li>
                    <li><a href="index.php?action=producteur">Nos Producteurs</a></li>
                    <li><a href="index.php?action=blog">Blog</a></li>
                    <li><a href="index.php?action=contact">Contact</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>Newsletter inscription</h4>
                <input type="text" name="newsletter">
            </div>
            <div class="col">
                <h4>Suivez-nous</h4>
                <ul>
                    <li><a href="/"></a>Facebook</li>
                    <li><a href="/"></a>Pinterest</li>
                    <li><a href="/"></a>Instagram</li>
                </ul>
            </div>
        </div>
        <div>
            <div class="footer_top row">
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