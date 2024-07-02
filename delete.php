
<?php 
// Include the database configuration file  
$server = "127.0.0.1";
$username = "root";
$password = "Drup@2008";
$database = "test";
$conn = mysqli_connect($server, $username, $password, $database);
        if (!$conn){
            die("Error". mysqli_connect_error());
        }
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    // "DELETE FROM images WHERE `images`.`id` = 7"
    $sql = "DELETE FROM `images` WHERE `images`.`id` = $id";
    $result = mysqli_query($conn, $sql);
}
// Get image data from database 
$sql = "SELECT * FROM `images`";
$result = mysqli_query($conn, $sql);


?>
<!-- Display images with BLOB data from database -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Museum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/dist/output.css" rel="stylesheet">
  </head>
  <body class="bg-dark text-white">
    <?php require '_nav.php'; ?>
    <h4 class="text-center my-4 text-warning">Delete items</h4>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <form action="/loginsystem/delete.php" method = "post">
    <div class="form-group my-4 mx-4 ">
            <label for="id text-white">Enter Item Id you want to delete: </label>
            <input type="text" class="form-control" id="id" name="id" aria-describedby="emailHelp">
            <div class = "d-flex justify-content-center my-4">
            <button type="submit" class="btn btn-danger">Delete item</button>
            </div>
        </div>
    </form>
    <?php 
    $num = mysqli_num_rows($result);
if( $num > 0){ ?> 
<div class="container">
    <div class="row g-3 mx-4 px-4"> 
        <?php while($row = mysqli_fetch_assoc($result)){ ?> 
          <div class = "col-4">
          <div class="card">
                  <img class = "card-img-top" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
                  <div class="card-body">
                  <?php echo "#".$row['id']." ".$row['description'];?>
                  </div>
          </div>
          </div>
        <?php } ?> 
   </div> 
   </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>

  </body>
</html>


