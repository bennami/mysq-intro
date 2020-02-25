<?php

class Connection{
    private $host = "localhost";
    private $user = "imane";
    private $pwd = "123";
    private $dbName = "new_schema";


   public function connect(){

        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName;
        $pdo = new PDO($dsn,$this->user,$this->pwd);

        //error handling
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //fetch mode has to be associative array
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return$pdo;
    }

    public function setPost(){

    }
}



