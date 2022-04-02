<?php


class User{

    function __construct(
        String $username, String $email, String $password
    )
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    function __toString() : String
    {
        return 
        "Name: ". $this->username
        ."\nEmail: ".$this->email 
        ."\nPassword: ". $this->password;
    }






}

