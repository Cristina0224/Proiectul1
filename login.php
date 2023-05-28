<?php
include "inregistrari.php";
session_start();
if((isset($_POST['username'])) && (isset($_POST['password']))){
$user1=$_POST['username'];
$sql="SELECT * FROM inregistrari WHERE username='$user1'";

$result = mysqli_query($con, $sql);
$user=mysqli_fetch_array($result);
 if ($user) {
        // Access the user data
        $username = $user['username'];
        $pass = $user['password'];
        
     if( $_POST['password']==$pass){
         if(isset($_POST['rememberme'])){
             setcookie('username', $_POST['username'], time()+60*60*24*365);
             setcookie('password', password_hash($_POST['password'],PASSWORD_DEFAULT), time()+60*60*24*365);
              echo "remember me cookie set!";
        
         }else{
              setcookie('username','', false);
              setcookie('password','', false);
              echo "remember me cookie not set!";
         } 
         $_SESSION['user_name']=$_POST['username'];
         $_SESSION['user_admin']=$user['admin'];
         header('Location:pag1.php');
        
 }else{
         echo 'Username/Password Invalid';
 }}
 }else{
     echo 'you must supply a username and password';
 }
?>