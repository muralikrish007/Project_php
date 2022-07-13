<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/scss/main.scss">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>Register Form</title>
</head>
<body>
  <div class="d-flex justify-content-center mt-3">
        <div class="card mt-1">
          <div class="card-body">
            <form class="mt-3" autocomplete="off"  id="form">
                <b><h1 class="text-center mb-3">Register</h1></b>
                  <div class="form-group">
                    <label for="exampleInputEmail1">User name</label>
                    <input type="text" class="form-control" require id="name" name="username">
          
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" require id="email" name="email" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="tel"  class="form-control" require id="phone" name="phoneno" pattern="[0-9]{10}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" re class="form-control" name="cpassword" id="confirmpassword">
                  </div>
                  <div class="text-center">
                     <input type="button" id="save"  value="register now" class="form-btn bg-info text-white">
                  </div>
             </form>
                     <p class="text-center small mt-3">Don't have an account! <a href="login.php">LogIn</a>.</p>
           </div>
        </div>
    </div>
<script>
  $(document).ready(function()
  {
    $("#save").on('click',function(){
      
      $.ajax({
        url:"insert.php",
       type:"post",
       url:"insert.php",
       data:$("#form").serialize(),
      success:function(data){
        window.location.href="login.php";
      }
  
    });
    });
   })
</script>
</body>
</html>