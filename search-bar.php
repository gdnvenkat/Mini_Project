<?php
    $server = "127.0.0.1";
    $username = "root";
    $password = "Drup@2008";
    $database = "test";
    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn){
        die("Error". mysqli_connect_error());
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="/dist/output.css" rel="stylesheet">
</head>
<body class = "bg-dark text-white">
    <div>
    <form action="/loginsystem/search-bar.php" method = "post">
    <div class="form-group my-4 mx-4 ">
            <label for="id text-white">Search for any items : </label>
            <input type="text" class="form-control" placeholder="Search item" id="id" name="id" aria-describedby="emailHelp">
            <div class = "d-flex justify-content-center my-4">
            <button type="submit" class="btn btn-warning" name = "submit">Search</button>
            </div>
        </div>
    </form>
</div>
<div class="container my-5">
    <table class="table">
        <?php
            if(isset($_POST['submit'])){
                $search = $_POST['id'];
                $sql = "Select * from `images` where id like '%$search%' or category like '%$search%' or description like '%$search%' "; 
                $result = mysqli_query($conn, $sql); 
                $num = mysqli_num_rows($result);
                if($num > 0) {?>

                <div class="container">
                <div class="row g-3 mx-4 px-4"> 
                <?php while($row = mysqli_fetch_assoc($result)){ ?> 
                    <div class = "col-4">
                    <div class="card">
                            <img class = "card-img-top" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
                            <div class="card-body">
                            <?php echo $row['description'];?>
                            </div>
                    </div>
                    </div>
                <?php } ?> 
                </div> 
                </div> 
                <?php }else{ ?> 
                    <p class="status error">Image(s) not found...</p> 
                <?php } ?>
                            <?php } ?>
                
    </table>
</div>

</body>
</html>