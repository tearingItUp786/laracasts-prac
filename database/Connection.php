<?php

class Connection
{
    //static functions can be accessed via the ::
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root786');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
