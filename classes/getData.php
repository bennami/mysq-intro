<?php


class getData extends connection
{

    public function getName()
    {
        $sql = "SELECT * FROM becode";
        $stmt = $this->connect()->query($sql);

        //fetch data
        while ($row = $stmt->fetch()) {
            echo $row['id'] . '<br>';
            echo $row['first_name'] . '<br>';

        }
    }


    //get users data
    public function getUserStmt($firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor)
    {
        $sql = "SELECT * FROM becode WHERE first_name = ? AND last_name =? AND username =? AND linkedin =? AND github=? AND email =? AND preferred_language =? AND avatar =? AND  video =? AND quote = ? AND quote_author =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['first_name'] . '<br>';
        }
    }


    //get users data
    public function setUserStmt($firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor)
    {
        $sql = "INSERT INTO becode(first_name,last_name,username,linkedin, github, email, preferred_language, avatar,video, quote ,quote_author)VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $username, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor]);

    }
}



