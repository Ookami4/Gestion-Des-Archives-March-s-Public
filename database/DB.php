<?php
class DB
{

    static public function connect()
    {
        $db = new PDO("mysql:host=127.0.0.1;dbname=gestionarchives;port=3308;charset=utf8mb4", "redone", "");
        $db->exec("set names utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $db;
    }
}