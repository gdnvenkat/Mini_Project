<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
  $loggedIn = true;
  $useroradmin = $_SESSION['useroradmin'];
}
else
{
  $loggedIn = false;
}
echo '<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">Museum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/loginsystem/welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/loginsystem/search-bar.php">Search</a>
        </li>';        
        if($loggedIn && $useroradmin == "admin"){
        echo '<li class="nav-item">
          <a class="nav-link" href="/loginsystem/crud_items.php">Add Items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/loginsystem/delete.php">Delete items</a>
        </li>';
        };
        echo '<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gallery
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="coins.php">Coins</a></li>
            <li><a class="dropdown-item" href="paintings.php">Paintings</a></li>
            <li><a class="dropdown-item" href="arch.php">Archaeology</a></li>
            <li><a class="dropdown-item" href="manu.php">Manuscripts</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
      
      <form class="d-flex">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
      <a class="nav-link" href="/loginsystem/signup.php">SignUp</a>
    </li>
        <li class="nav-item">
        <a class="nav-link" href="/loginsystem/login.php">LogIn</a>
      </li>';
        if($loggedIn){
        echo ' <li class="nav-item">
        <a class="nav-link" href="/loginsystem/logout.php">LogOut</a>
      </li>';
        }
echo '</ul>
      </form>
    </div>
  </div>
</nav>';
?>
