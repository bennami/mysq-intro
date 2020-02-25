<?php


class getData extends connection
{

   /* //this function gets the data from the db without using prepared statements
    public function getInfo()
    {
        //select from the becode table, this var  contains all sql information
        $sql = "SELECT * FROM becode";

        //here, we point to connect method. Query() is a built in method where we  pass in our sql statement
        $stmt = $this->connect()->query($sql);

        //fetch data. i set the fetch to assoc array so dont need to do anything
        while ($row = $stmt->fetch()) {
            echo '<hr>';
            echo $row['id'] . '<br>';
            echo  $row['first_name'] . '<br>';
            echo $row['username'] . '<br>';
            echo $row['linkedin'] . '<br>';
            echo $row['github'] . '<br>';
            echo $row['email'] . '<br>';
            echo $row['preferred_language'] . '<br>';
            echo $row['avatar'] . '<br>';
            echo $row['video'] . '<br>';
            echo $row['quote'] . '<br>';
            echo $row['quote_author'] . '<br>';
            echo $row['created_at'] . '<br>';

        }
    }*/

    //get users data with prepared statement
    public function getInfoPrepared()
    {
        $sql = "SELECT * FROM becode";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);
        return $data = $stmt->fetchAll();

    }


    //get users data
    public function setUserStmt($firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor, $createdAt)
    {
        $sql = "INSERT INTO becode(first_name,last_name,username,linkedin, github, email, preferred_language, avatar,video, quote ,quote_author,created_at)VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor, $createdAt]);
    }
}



