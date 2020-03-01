<?php


class logOut
{
    public static function destroySession(){
        session_destroy();
    }

}