<?php
    if(isLogged() == 1){
        header("Location:index.php?page=membres");
    }
?>

<h2 class="header header-form">S'inscrire</h2>

<?php
    if(isset($_POST['submit'])){
        $nom = htmlspecialchars(trim($_POST['nom']));
        $email = htmlspecialchars(trim($_POST['email']));
        $password = sha1(htmlspecialchars(trim($_POST['password'])));

        if(email_taken($email) == 1){
            $erreur_email = "L'adresse email est déjà utilisée...";
        }else{
            inscription($nom, $email, $password);
            $_SESSION['chat'] = $email;
            header("Location:index.php?page=membres");
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <form method="post" id="regForm">

    <div class="field">
        <label class="field-label" for="nom">Votre nom</label>
        <input class="field-input" type="text" name="nom" id="name"/>
    </div>

    <div class="field">
        <label class="field-label" for="email">Votre adresse email</label>
        <input class="field-input" type="email" name="email" id="email"/>
    </div>

    <div class="field">
        <label class="field-label" for="password">Votre mot de passe</label>
        <input class="field-input" type="password" name="password" id="password"/>
    </div>
    <p class="error"><?php echo (isset($erreur_email)) ? $erreur_email : ''; ?></p>
    <button type="submit" name="submit">S'inscrire</button>


</form>

</body>
</html>