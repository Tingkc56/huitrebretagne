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
    <link rel="stylesheet" href="app\public\back\css\style.css">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Admini</title>
</head>

<body>
    <div class="container-fluid">
            <div class="btnAdmin row container">
                <div class="backTdb col">
                    <button class="btn btn-success"><a href="hbAdmin.php?action=accueilAdmin">Retour au tableau</a></button>
                </div>
                <div class="deconTemp col">
                    <button class="btn btn-info"><a href="hbAdmin.php?action=deconnexion">Deconnexion</a></button>
                </div>
            </div>
    </div>
    <br>
    <?= $content ?>

</body>

</html>