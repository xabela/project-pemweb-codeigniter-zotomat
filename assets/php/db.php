<?php

$host = 'localhost';
$dbusername = 'root';
$dbpassword= 'man3malang';
$dbname = 'pemweb2';
$mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);

//jika koneksi datbase gagal
if ($mysqli->connect_errno) {
    die('Database Connection Fails');
}