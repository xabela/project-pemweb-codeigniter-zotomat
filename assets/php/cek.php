<?php
session_start();
//jika sudah login
if(isset($_SESSION['user_system_logged_in'])) {
    header('Location:../index.html');
} else {
    echo 'Please <a href="login.php">login</a> or
    <a href="register.php">register</a>';
}