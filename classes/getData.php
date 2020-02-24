<?php


class getData extends connection{

public function  getName(){
    $sql = "SELECT * FROM becode";
    $stmt = $this->connect()->query($sql);
    while($row = $stmt->fetch()){
        echo $row['first_name'].'<br>';
        echo $row['id'].'<br>';
    }
}
}


/*$newConnection->prepare($insertCommand)
    ->execute([
        'firstName' => $firstName,
        'lastName' => $lastName, 'username' => $username, 'linkedin' => $linkedin, 'github' => $github,
        'email' => $email, 'preferred_language' => $preferred_language, 'avatar' => $avatar, 'video' => $video,
        'quote' => $quote, 'quote_author' => $quote_author]);*/
