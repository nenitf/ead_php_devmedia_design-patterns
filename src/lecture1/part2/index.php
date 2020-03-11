<?php

//{{{Classes
class MySqlConnection {
    public function connect()
    {
        var_dump("Connecting to MySql");
        // debug_print_backtrace();
    }
}

class OracleConnection {
    public function connect()
    {
        var_dump("Connecting to Oracle");
    }
}

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
///}}}

$room = new RoomService();
$room->roomVerification();

$report = new ReservationReport();
$report->reportGeneration();

$reservation = new reservationService();
$reservation->createReservation();

// vim: set fdm=marker:
