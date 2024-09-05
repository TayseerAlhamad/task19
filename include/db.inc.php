<?php

$serverName = "localhost";
$username = "root";
$pass = "";
$dbName = "dana";

$conn = mysqli_connect($serverName, $username, $pass, $dbName);

// Check connection
if (mysqli_connect_errno()) {
    echo '<div style="font-size:2rem" class="vh-100 d-flex justify-content-center align-items-center">Failed to connect to MySQL:' . mysqli_connect_error() . '</div>';
    exit();
}
