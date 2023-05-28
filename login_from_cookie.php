F<?php
include "inregistrari.php";
session_start();
if((isset($_COOKIE['username']))&&(isset($_COOKIE['password']))){
    $sql="SELECT * FROM inregistrari WHERE username='".$_COOKIE['username']."'";

$result = mysqli_query($con, $sql);
$user=mysqli_fetch_array($result);
 if ($user) {
        // Access the user data
        $username = $user['username'];
        $pass = $user['password'];
        if(password_verify($pass,$_COOKIE['password'])){
            $_SESSION['user_name']=$user['username'];
         $_SESSION['user_admin']=$user['admin'];
        }
 }
}