<?php
// print_r($_POST);

include "confic.php";
$un=$_POST['username'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$pwd=$_POST['password'];
$cpwd=$_POST['cpassword'];
$select = " SELECT * FROM register WHERE email = '$email' && password = '$pwd' ";
$sql="insert into register(username,email,phoneno,password,cpassword) values('$un','$email','$phoneno','$pwd','$cpwd')";
$result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result)>0){

      $error[] = 'user already exist!';
      header('location:register.php');  

   }else{

      if($pwd != $cpwd){
         $error[] = 'password not matched!';
         header('location:register.php');
      }else{
        $sql="insert into register(username,email,phoneno,password,cpassword) values('$un','$email','$phoneno','$pwd','$cpwd')";
         mysqli_query($conn, $sql);
         header('location:login.php');
      }  
   }

