<?php  
// Database configuration  
$dbHost     = "127.0.0.1";  
$dbUsername = "root";  
$dbPassword = "Drup@2008";  
$dbName     = "test";  
  
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $category = $_POST["category"];
    $item_description = $_POST["item_description"];
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into images (category,description,image,created) VALUES ('$category','$item_description','$imgContent', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    
  <title>Testing image upload</title>
</head>
<body class="bg-dark text-white">
<?php require '_nav.php'; ?>
<h2 class = "text-center mt-4 text-warning">Add new items</h2>
<form action="/loginsystem/crud_items.php" method="post" enctype="multipart/form-data">

<div class = "mb-4 mx-4">
    <h4 class = "text-white">Item Category :</h4>
    <div class="form-check">
  <input class="form-check-input  " type="radio" name="category" id="flexRadioDefault1" value = "coins" checked>
  <label class="form-check-label " for="flexRadioDefault1">
    Coins
  </label>
</div>
<div class="form-check ">
  <input class="form-check-input  " type="radio" name="category" id="flexRadioDefault2" value = "paintings" >
  <label class="form-check-label  " for="flexRadioDefault2">
    Paintings
  </label>
</div>
<div class="form-check">
  <input class="form-check-input  " type="radio" name="category" id="flexRadioDefault3" value = "arch" >
  <label class="form-check-label  " for="flexRadioDefault3">
    Archaeology
  </label>
</div>
<div class="form-check">
  <input class="form-check-input  " type="radio" name="category" id="flexRadioDefault4" value = "manuscript">
  <label class="form-check-label  " for="flexRadioDefault4">
    Manuscripts
  </label>
</div>
</div>

<div class="mb-4 mx-4">
    <h4 >Item description : </h4>
        <textarea class="form-control" id="item_description" name="item_description" rows = "1"></textarea>
</div>
  <div class = "flex mx-4">
    <label>Select Image File:</label>
    <input type="file" name="image">
    <!-- <input type="submit" name="submit" value="Upload"> -->
</div>
<div class="d-flex justify-content-center my-4">
<button type="submit" class ="btn btn-warning" name="submit">Submit</button>
</div>
</form>
</body>
</html>