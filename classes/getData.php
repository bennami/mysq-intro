<?php


class getData extends connection
{


    //get users data with prepared statement
    public function getInfoPrepared()
    {
        $sql = "SELECT * FROM becode";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);
        return $data = $stmt->fetchAll();

    }


    //get users data
    public function insert($firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor, $createdAt)
    {
        $sql = "INSERT INTO becode(first_name,last_name,username,linkedin, github, email, preferred_language, avatar,video, quote ,quote_author,created_at)VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor, $createdAt]);
    }


    //check id

    public function getProfile(){
        $sql = "SELECT * FROM becode WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $userID = $_GET['id'];
        $stmt->execute([$userID]);

        return $stmt->fetch();
    }
}



