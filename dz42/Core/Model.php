<?php

namespace Core;
use Mysqli;

class Model {
    public static function getDB()
    {
        $db = new Mysqli(Config::DB_HOST,
            Config::DB_USER, Config::DB_PASSWORD,
            Config::DB_NAME);
        return $db;
    }
}