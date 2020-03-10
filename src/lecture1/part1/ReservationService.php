<?php

namespace App\Lecture1\Part1;

class ReservationService {
    private $connection; // private MysqlConnection $connection;
    function __construct() {
        $this->connection = new MysqlConnection();
    }

    public function createReservation()
    {
        $this->connection->connect();
        var_dump("business logic over the creation of a reservation");
    }
}

