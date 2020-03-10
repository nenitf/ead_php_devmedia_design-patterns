<?php

namespace App\Lecture1\Part1;

class RoomService {
    private $connection; // private MysqlConnection $connection;
    function __construct() {
        $this->connection = new MySqlConnection();
    }

    public function roomVerification()
    {
        $this->connection->connect();
        var_dump("business logic over entity room");
    }
}

