<?php

    include '../functions/main-functions.php';
    $utilisateur = $_SESSION['utilisateur'];
    $membre = $_SESSION['chat'];
    $message = htmlspecialchars(trim($_POST['message']));

    $i = array(
        'expediteur' => $membre,
        'destinataire' =>$utilisateur,
        'message'=>$message
    );

    $sql = "INSERT INTO messages(expediteur,destinataire,message,date_envoie) VALUES(:expediteur,:destinataire,:message,NOW())";
    $req = $db->prepare($sql);
    $req->execute($i);