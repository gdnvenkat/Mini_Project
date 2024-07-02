<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $server = "127.0.0.1";
        $username = "root";
        $password = "Drup@2008";
        $database = "contactus";
        $conn = mysqli_connect($server, $username, $password, $database);
        if (!$conn){
            die("Error". mysqli_connect_error());
        }
        $check = false;
        $email = $_POST["email"];
        $description = $_POST["description"];
        echo $email ." ". $description;
        $sql = "INSERT INTO `contactus` ( `email`, `description`, `tstamp`) VALUES ('$email', '$description', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            $check = true;
        }
        else{
            echo "something went wrong! Please try again later.";
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
  <body class="bg-dark text-white">
    <?php
    require "_nav.php";
    ?>
    <?php
    if($check)
    {
    echo'<div class="alert alert-success" role="alert">
    <strong>Success!</strong>
    Your form has been successfully submitted.
    </div>';
    }
    ?>
    <h2 class="text-warning text-center">Contact Us</h2>
    <div class="container">
  <form class="my-4" action = "contact.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name = "email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="description">Note Description</label>
        <textarea class="form-control" id="description" name="description" rows="10"></textarea>
      </div>
  </div>

  <div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-warning">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>