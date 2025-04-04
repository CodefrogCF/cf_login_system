<?php

$host = "webspace34.do.de";
$user = "web33";
$password = "g3Mp,=KH69+a";
$database = "usr_web33_2";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>