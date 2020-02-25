<?php


class getData extends connection
{

    //this function gets the data from the db without using prepared statements
    public function getInfo()
    {
        //select from the becode table, this var  contains all sql information
        $sql = "SELECT * FROM becode";

        //here, we point to connect method. Query() is a built in method where we  pass in our sql statement
        $stmt = $this->connect()->query($sql);

        //fetch data. i set the fetch to assoc array so dont need to do anything
        while ($row = $stmt->fetch()) {
            echo '<hr>';
            echo/* $id = */$row['id'] . '<br>';
            echo /*$firstName =*/ $row['first_name'] . '<br>';
            echo /*$lastName = */$row['username'] . '<br>';
            echo /*$username = */$row['linkedin'] . '<br>';
            echo /*$github = */$row['github'] . '<br>';
            echo /*$email = */$row['email'] . '<br>';
            echo /*$preferredLanguage =*/ $row['preferred_language'] . '<br>';
            echo /*$avatar =*/ $row['avatar'] . '<br>';
            echo /*$video =*/ $row['video'] . '<br>';
            echo /*$quote =*/ $row['quote'] . '<br>';
            echo /*$quoteAuthor =*/ $row['quote_author'] . '<br>';
            echo /*$createdAt =*/ $row['created_at'] . '<br>';

        }
    }


    //get users data with prepared statement
    public function getInfoPrepared($firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor,$createdAt)
    {
        $sql = "SELECT * FROM becode WHERE first_name = ? AND last_name =? AND username =? AND linkedin =? AND github=? AND email =? AND preferred_language =? AND avatar =? AND  video =? AND quote = ? AND quote_author =? AND created_at =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor,$createdAt]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['first_name'] . '<br>';
            echo $name['linkedin'] . '<br>';

        }
    }


    //get users data
    public function setUserStmt($firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor, $createdAt)
    {
        $sql = "INSERT INTO becode(first_name,last_name,username,linkedin, github, email, preferred_language, avatar,video, quote ,quote_author,created_at)VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor, $createdAt]);

    }
}



