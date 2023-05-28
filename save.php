<?php
require_once "conection.php";
$msg="";
if(isset($_POST['upload'])){
    $target="./images/".md5(uniqid(time())). basename($_FILES['image']['name']);
    $text=$_POST['title'];
    $pret=$_POST['pret'];
    $descriere=$_POST['descriere'];
    $sql="INSERT INTO images(title, image , pret , descriere)VALUES('$text','$target','$pret','$descriere')";
    mysqli_query($con,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        header('location:menu.php');
    }else{
        $msg="vai vai vai";
    }
}
?>