<?php

namespace App\Lecture1\Part1;

require __DIR__ . '/../../bootstrap.php';

$room = new RoomService();
$room->roomVerification();

$report = new ReservationReport();
$report->reportGeneration();

$reservation = new reservationService();
$reservation->createReservation();
