<?php

    if(!isset($_GET['utilisateur']) || isLogged() == 0 || user_exist() != 1){
        header("Location:index.php?page=accueil");
    }

    $_SESSION['utilisateur'] = $_GET['utilisateur'];

    foreach(get_user() as $utilisateur){
        ?>
            <h2 class="header"><?= $utilisateur->nom; ?></h2>

            <div class="messages-box"></div>

            <div class="bottom">
                <div class="field field-area">
                    <label for="message" class="field-label">Votre message</label>
                    <textarea name="message" id="message" rows="2" class="field-input field-textarea"></textarea>
                </div>
                <button type="submit" id="send" class="send">
                    <span class="i-send"></span>
                </button>

            </div>
        <?php
    }
