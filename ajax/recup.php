<?php

    include '../functions/main-functions.php';
    $utilisateur = $_SESSION['utilisateur'];
    $membre = $_SESSION['chat'];

    $req = $db->query("SELECT * FROM messages WHERE (expediteur='$membre' AND destinataire='$utilisateur') OR (destinataire='$membre' AND expediteur='$utilisateur')");
    $results = array();

    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }

    foreach($results as $message){
        ?>
            <div class="message <?php echo ($message->expediteur == $membre) ? 'message-membre' : 'message-utilisateur' ?>">
                <?= $message->message ?>

            </div>
            <br/><br/>

        <?php
    }