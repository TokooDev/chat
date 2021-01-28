<?php
    include 'functions/main-functions.php';

    $pages = scandir('pages/');

    if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages)){
        $page = $_GET['page'];
    }else{
        $page = 'accueil';
    }

    $pages_functions = scandir('functions/');

    if(in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }

?>


<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Tokosel Tchat App</title>
        <link rel="stylesheet" href="css/style.css"/>
        <link href='http://fonts.googleapis.com/css?family=Roboto:500,700,400' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
            include 'body/navigation.php';
        ?>
        <div class="container">
            <?php
                include 'pages/'.$page.'.php';
            ?>
        </div>
        <script src="js/jquery.js"></script>
        <?php
            $pages_js = scandir('js/');
            if(in_array($page.'.js',$pages_js)){
                ?>
                    <script src="js/<?= $page ?>.js"></script>
                <?php
            }

        ?>

    </body>
</html>