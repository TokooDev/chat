<?php
    function user_exist(){
        global $db;
        $e = array('utilisateur' => $_GET['utilisateur'], 'session'=>$_SESSION['chat']);
        $sql = "SELECT * FROM utilisateurs WHERE email =:utilisateur AND email != :session";
        $req = $db->prepare($sql);
        $req->execute($e);
        $exist = $req->rowCount($sql);
        return $exist;
    }

    function get_user(){
        global $db;
        $req = $db->query("SELECT * FROM utilisateurs WHERE email = '{$_SESSION['utilisateur']}'");
        $utilisateur = array();
        while($row = $req->fetchObject()){
            $utilisateur[] = $row;
        }
        return $utilisateur;

    }