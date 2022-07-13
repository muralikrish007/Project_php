



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/scss/main.scss">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
 <div class="d-flex justify-content-center mt-5">
   <div class="card mt-5">
     <div class="card-body">
     <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
        <div class="d-flex justify-content-center">
          <svg  xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle " viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
       </div>
        <form class="mt-3" method="post" action="select.php">
          <div class="form-group">
           <label for="exampleInputEmail1">Email address</label>
           <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
           <label for="exampleInputPassword1">Password</label>
           <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Log IN</button>
          </div>
        </form>
        <p class="text-center small mt-3">Don't have an account! <a href="register.php">Register here</a>.</p>
    </div>
   </div>
 </div>
</body>
</html> 