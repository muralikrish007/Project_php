<?php 
session_start();

include "confic.php";
extract($_REQUEST);

$email=$_POST['email'];
$pwd=$_POST['password'];
$select = " SELECT * FROM register WHERE email = '$email' && password = '$pwd' ";
$result=mysqli_query($conn,$select);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    print_r($row);
    $_SESSION['id']=$row['id'];
$_SESSION["username"]=$row['username'];
$_SESSION['email']=$row['email'];
$_SESSION['phoneno']=$row['phoneno'];
header("location:home.php");
}else{
    header("location:login.php");
    $error[] = 'incorrect email or password!';
}
// }
?>