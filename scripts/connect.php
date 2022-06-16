<?php
$host = 'localhost';
$username = 'lamp_user';
$password = 'W46t@9Vd8$X7';
$dataBase = 'musicDB';

$connect = mysqli_connect($host, $username, $password, $dataBase);

if (empty($connect)) {
    die("Unable to Connect: " . mysqli_connect_error());
}