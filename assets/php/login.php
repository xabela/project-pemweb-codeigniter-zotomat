<?php

include_once 'db.php';

//buat mengantisipasi sql injection
$email = $mysqli->real_escape_string($_POST['email']);
$password = $mysqli->real_escape_string($_POST['password']);
$sql = "SELECT * FROM user WHERE email = '$email'";
$result = $mysqli->query($sql);
//sql injection buat login tanpa tahu username dan password 
//pake nya di username 'OR1=1#
// if($result->num_rows) {
//     echo 'OK';
// } else {
//     echo '!!!';
// }

//jika username ada
if($result->num_rows) {
    $row = $result->fetch_object();
    //cek password (yg dicek hasil hash nya)
    if(password_verify($password, $row->password)){
            session_start();
            $_SESSION['user_system_logged_in'] = true;
            $_SESSION['user_system_email'] = $row->email;
            $_SESSION['user_system_username'] = $row->username;
            
            header('Location:../index.php');
    } else {
        echo 'Wrong Password';
    }
} else {
    echo 'Email not exist';
}