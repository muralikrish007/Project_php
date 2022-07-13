<?php 
session_start();
 
include "confic.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   s<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Document</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

   </style>

</head>
<body>   
<div class="d-flex justify-content-center mt-5">
 <div class="card">

   <div class="card-body">
      
      <h3><b>welcome <span><?php echo $_SESSION["username"] ?></span> </b></h3>
 <table>
  <tr>
    <th>id</th>
    <th>Name</th>
    <th>phoneno</th>
    <th>Email</th>
    <th>Update</th>
  </tr>
  <tr>
    <td><?php echo $_SESSION["id"] ?></td>
    <td><?php echo $_SESSION["username"] ?></td>
    <td><?php echo $_SESSION["phoneno"] ?></td>
    <td><?php echo $_SESSION["email"] ?></td>
    <td><a href="update.php?id=<?=$_SESSION['id']?>">Edit</a></td>
  </tr>
</table>
      <button class="text-center ml-5"><a href="logout.php" >Logout</a></button>
  </div>
</div>
</div>
<script>
   $(document).ready(function (){
     $(.editbtn).on('click',function(){
       $('#editmodel').model('show');
     });
   });
</script>
</body>
</html>
