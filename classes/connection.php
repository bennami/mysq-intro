<?php

class Connection{
    private $host = "localhost";
    private $user = "imane";
    private $pwd = "123";
    private $dbName = "new_schema";


   public function connect(){

        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName;
        $pdo = new PDO($dsn,$this->user,$this->pwd);


       $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

       //error handling
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //fetch mode has to be associative array when we fetch from db
       $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        return$pdo;
    }

}



