<?php

//buat koneksi ke database
include_once 'db.php';

//kalo bisa masuk, ambil data dari form
$email = $_POST['email'];
$password = password_hash($_POST['password'],PASSWORD_BCRYPT); //BIAR PASS NYA GAK KELIATAN DI DB
$username = $_POST['username'];
//insert ke database
// echo $email;
// return;
$sql = "INSERT INTO user (email, password, username) VALUES ('$email', 
'$password', '$username')";
$mysqli->query($sql);
header('Location: ../login.html');