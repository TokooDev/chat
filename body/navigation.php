<div class="topbar">
    <a class="app-name" href="index.php">Tokosel Tchat App</a>
    <span class="menu">
        <?php
            if(isLogged()==1){
                ?>
                    <a href="index.php?page=membres" class="<?php echo ($page=='membres') ? 'active' : '' ?>">Ami(e)s</a>
                    <a href="index.php?page=deconnexion">Déconnexion</a>
                <?php
            }else{
                ?>
                    <a href="index.php?page=inscription" class="<?php echo ($page=='inscription') ? 'active' : '' ?>">S'inscrire</a>
                    <a href="index.php?page=connexion" class="<?php echo ($page=='connexion') ? 'active' : '' ?>">Se connecter</a>
                <?php
            }
        ?>
    </span>
</div>