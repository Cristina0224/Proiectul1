<?php
 include "conection.php";
 $sql="DELETE FROM rezervari WHERE id='{$_GET['id']}'";
 $query= mysqli_query($con, $sql) or die (mysqli_error($con));
 header('Location:reservation.php');
 ?>
