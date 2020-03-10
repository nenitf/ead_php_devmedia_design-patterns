<?php

namespace App\Leitura1\Parte2;

class RoomService {
    private $connection; // private OracleConnection $connection;
    function __construct() {
        $this->connection = new OracleConnection();
    }

    public function roomVerification()
    {
        $this->connection->connect();
        var_dump("business logic over entity room");
    }
}

