<?php
/*
 * The singleton programming pattern solves the problem of when you need one,
 * and only one instance of given class on your script. Although this essentially
 * creates you a global variable, it can be very beneficial when you shouldn't have
 * multiple instances of the same class. For example, you might not want more than
 * one database object, since the connection goes to the same server, database,
 * and everything else. The key to a singleton is having a private constructor that
 * keeps your client code from instantiating the class at will. Instead, the class
 * itself has a static, public method that creates and serves up a reference to a public,
 * static instance variable that holds a reference to an instance of the class. Sounds confusing?
 * Then check out the video. It's really not complicated at all.
 */
class Database{

    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(!isset(self::$instance)){
            self::$instance = new Database;
        }
        return self::$instance;
    }

    public function connect()
    {
        return 'connection...';
    }

}

$db = Database::getInstance();
echo $db->connect();
