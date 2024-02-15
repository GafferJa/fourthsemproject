<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "fourthsem";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    echo "Database connection failed";
}
