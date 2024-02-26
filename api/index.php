<?php

require_once "connection.php";

$server = $_SERVER['REQUEST_METHOD'];

function getUser()
{
    $sql = "SELECT * FROM users";
    $result = mysqli_query($GLOBALS['conn'], $sql);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($users);
}

// getUser();

if ($server == "GET") {
    getUser();
} else if ($server == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $sql = "INSERT INTO users(name, email, address) VALUES ('$name', '$email', '$address')";
    if (mysqli_query($conn, $sql)) {
        echo "Users inserted successfully";
    } else {
        echo "Users failed to insert";
    }
}
