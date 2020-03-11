<?php

//{{{Classes
interface Connection {
    function connect();
}

class MySqlConnection implements Connection {
    public function connect(){
        var_dump("Connecting to MySql");
    }
}

class OracleConnection implements Connection {
    public function connect()
    {
        var_dump("Connecting to Oracle");
    }
}

class SQLServerConnection implements Connection {
    public function connect()
    {
        var_dump("Connecting to SQLServer");
    }
}

class ReservationReport {
    private $connection; // private Connection $connection;
    function __construct(Connection $c) {
        $this->connection = $c;
    }

    public function reportGeneration() {
        $this->connection->connect();
        var_dump("business logic in order to generate a report");
    }
}

class ReservationService {
    private $connection; // private Connection $connection;
    function __construct(Connection $c) {
        $this->connection = $c;
    }

    public function createReservation() {
        $this->connection->connect();
        var_dump("business logic over the creation of a reservation");
    }
}

class RoomService {
    private $connection; // private Connection $connection;
    function __construct(Connection $c) {
        $this->connection = $c;
    }

    public function roomVerification() {
        $this->connection->connect();
        var_dump("business logic over entity room");
    }
}
///}}}

$room = new RoomService(new SQLServerConnection());
$room->roomVerification();

$report = new ReservationReport(new SQLServerConnection());
$report->reportGeneration();

$reservation = new reservationService(new SQLServerConnection());
$reservation->createReservation();

// vim: set fdm=marker:
