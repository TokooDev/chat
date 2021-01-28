<?php

    function email_taken($email){
        global $db;
        $e = array('email' => $email);
        $sql = 'SELECT * FROM utilisateurs WHERE email = :email';
        $req = $db->prepare($sql);
        $req->execute($e);
        $free = $req->rowCount($sql);

        return $free;
    }

    function inscription($nom, $email, $password){
        global $db;
        $r = array(
            'nom'=>$nom,
            'email'=>$email,
            'password'=>$password
        );
        $sql = "INSERT INTO utilisateurs(nom,email,password) VALUES(:nom,:email,:password)";
        $req = $db->prepare($sql);
        $req->execute($r);
    }