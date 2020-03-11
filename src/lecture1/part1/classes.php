<?php

namespace App\Lecture1\Part1;

class MySqlConnection {
    public function connect()
    {
        var_dump("Connecting to MySql");
        // debug_print_backtrace();
    }
}

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

