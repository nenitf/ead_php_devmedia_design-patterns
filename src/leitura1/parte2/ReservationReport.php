<?php

namespace App\Leitura1\Parte2;

class ReservationReport {
    private $connection; // private OracleConnection $connection;
    function __construct() {
        $this->connection = new OracleConnection();
    }

    public function reportGeneration()
    {
        $this->connection->connect();
        var_dump("business logic in order to generate a report");
    }
}

