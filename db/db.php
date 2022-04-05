<?php
$hostNameServer = "localhost";

$userHostServer = "root";

$passwordServer = "";

$dbnameServer = "attack";

$conn = new mysqli($hostNameServer, $userHostServer, $passwordServer, $dbnameServer);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
