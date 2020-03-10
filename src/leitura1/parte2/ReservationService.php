<?php

namespace App\Leitura1\Parte2;

class ReservationService {
    private $connection; // private OracleConnection $connection;
    function __construct() {
        $this->connection = new OracleConnection();
    }

    public function createReservation()
    {
        $this->connection->connect();
        var_dump("business logic over the creation of a reservation");
    }
}

