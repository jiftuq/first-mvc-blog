<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Accueil du blog de Pitz Michaël" />
        <meta name="author" content="Pitz Michaël" />
        <title>Mon Blog | Accueil</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <?php
        // appel du menu
        include BASE_URL."/view/inc/menu.view.html.php";
        ?>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>Le blog de Pitz Michaël</h1>
                <p class="lead">du blabla</p>
                <p>Bootstrap v5.2.3</p>
                <?php
            var_dump($_GET, $menu,$articles);
                ?>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>