<?php
require 'classes/connection.php';
require 'classes/insert.php';
$connection = new connection();
$connection->connect();
if($connection){
    echo 'connected';
}