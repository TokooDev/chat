<?php

    function user_exist($email,$password){
        global $db;
        $u = array(
            'email'=>$email,
            'password'=>$password
        );
        $sql = "SELECT * FROM utilisateurs WHERE email=:email AND password=:password";
        $req = $db->prepare($sql);
        $req->execute($u);
        $exist = $req->rowCount($sql);
        return $exist;

    }