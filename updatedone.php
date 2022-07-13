<?php
include "confic.php";

$id=$_POST['id'];
$un=$_POST['username'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$sql="UPDATE register set  username='$un',email='$email',phoneno='$phoneno' where id='$id'";
$result = mysqli_query($conn, $sql);
 if($result){
    header('location:home.php');
    // echo 'error';
   }else{
    echo 'error';
     
   }

?>