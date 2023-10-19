<?php

$serverName = "mysql";
$dBUsername = "php";
$dBPassword = "php";
$dBName = "cloud_computing";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}
echo "SQL connected successfully! Hi there this works!<br>";
echo "Server Info: ". mysqli_get_server_info($conn);



