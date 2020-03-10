<?php

namespace App\Leitura1\Parte1;

class ReservationReport {
    private $connection; // private MysqlConnection $connection;
    function __construct() {
        $this->connection = new MysqlConnection();
    }

    public function reportGeneration()
    {
        $this->connection->connect();
        var_dump("business logic in order to generate a report");
    }
}

