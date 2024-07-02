<?php
    $showAlert = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $server = "127.0.0.1";
        $username = "root";
        $password = "Drup@2008";
        $database = "users";
        $conn = mysqli_connect($server, $username, $password, $database);
        if (!$conn){
            die("Error". mysqli_connect_error());
        }
       ;

        
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $useroradmin = $_POST["useroradmin"];


        $existsSql = "SELECT * from `users` WHERE username = '$username'";
        $result = mysqli_query($conn,$existsSql);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows > 0)
        {
          $showError = 'Username already exists';
        }
        else
        {
          if(($password == $cpassword)){
              $sql = "INSERT INTO `users` ( `username`, `password`, `date`, `useroradmin`) VALUES ('$username', '$password', current_timestamp(), '$useroradmin');";
              $result = mysqli_query($conn, $sql);
              if ($result){
                  $showAlert = true;
              }
          }
          else{
              $showError = "Passwords do not match";
          }
      }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Museum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    <?php
    require "_nav.php"; 
    ?>
<?php
    if($showAlert)
    {
    echo'<div class="alert alert-success" role="alert">
    <strong>Success!</strong>
    Your account is now created and you can log in
    </div>';
    }
    if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$showError.
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> ';
        }
?>
    <div class="container bg-dark">
    <h2 class = "text-center mt-4 text-warning">Sign up to our website</h2>
    <form action = "/loginsystem/signup.php" method = "post">
  <div class="mb-3">
    <label for="username" class="form-label col-md-6  text-white">Username</label>
    <input type="text" class="form-control" id="username" name= "username" aria-describedby="emailHelp" required>

  </div>
  <div class="mb-3">
    <label for="password" class="form-label col-md-6  text-white">Password</label>
    <input type="password" class="form-control" id="password" name= "password" required>
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label col-md-6  text-white">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name = "cpassword" required>
  </div>
    <div class="form-check">
  <input class="form-check-input  text-white" type="radio" name="useroradmin" id="flexRadioDefault1" value = "user" >
  <label class="form-check-label  text-white" for="flexRadioDefault1">
    User
  </label>
</div>
<div class="form-check">
  <input class="form-check-input  text-white" type="radio" name="useroradmin" id="flexRadioDefault2" value = "admin" checked>
  <label class="form-check-label  text-white" for="flexRadioDefault2">
    Admin
  </label>
</div>
  <div class = "d-flex justify-content-center">
  <button type="submit" class="btn btn-warning  text-white" >Submit</button>
</div>
</form>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>