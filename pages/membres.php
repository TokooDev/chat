<?php
    if(isLogged() == 0){
        header("Location:index.php?page=connexion");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Membres</title>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
</head>
<body>
    <h2 class="header">Membres Actifs</h2>
<?php
    foreach(get_membres() as $membre){
        if($membre->email != $_SESSION['chat']){
            ?>
                <div class="membre">
                    <strong><?= $membre->nom ?></strong><br/>
                    <span><?= $membre->email ?></span><br/>
                    <a class="select" href="index.php?page=tchat&utilisateur=<?= $membre->email ?>"><span class="i-user"></span></a>
                </div>

            <?php
        }

    }
?>

</body>
</html>