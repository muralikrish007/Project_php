<?php 
include 'confic.php';
extract($_REQUEST)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/scss/main.scss">
    <script src="./assets/js/myscript.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>Register Form</title>
</head>
<body>
    <div class="d-flex justify-content-center mt-3">
        <div class="card mt-1">
          <div class="card-body">
            <?php
             $query="SELECT * from register where id=$id";
             $result= mysqli_query($conn,$query);
             if(mysqli_num_rows($result)>0){  
              $row = mysqli_fetch_assoc($result);
             ?>
      <form class="mt-3" autocomplete="off" action="updatedone.php "method="post" id="form">
        <b><h1 class="text-center mb-3">Register</h1></b>
         <div class="form-group">
            <label for="exampleInputEmail1">User_id</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['id'];?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">User name</label>
            <input type="text" class="form-control" id="name" name="username" value="<?php echo $row['username'];?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phoneno"  pattern="[0-9]{10}" value="<?php echo $row['phoneno'];?>">        </div>
             </div>
      
        <div class="text-center">
        <input type="submit" name="submit" value="register now" class="form-btn bg-info text-white">
        
        </div>
      </form>
     <?php 
             }
             ?>
   </div>
  </div>
</div>
</body>
</html>