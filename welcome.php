<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location: login.php");
  exit;
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Welcome <?php echo "{$_SESSION['username']}"?></title> -->
    <title>Museum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    <!-- Welcome <?php echo "{$_SESSION['username']} and {$_SESSION['useroradmin']}"; ?> -->
    <?php 
    require '_nav.php';
    ?>
    <div class="mx-4 my-4">
    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/c1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/c2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/c3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/c4.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="container">
  <div class="d-flex">
    <div>
    <img src="img/ok.png" height="300" width="500">
    </div>
    <div class="text-white mx-4">
    <h3 class="text-center text-warning text-decoration-underline">History Of The Museum</h3>
    <h5 class = "my-4">Founded in 1814 at the cradle of the Asiatic Society of Bengal (at the present building of the Asiatic Society, 1 Park Street, Kolkata), Indian Museum is the earliest and the largest multipurpose Museum not only in the Indian subcontinent but also in the Asia-Pacific region of the world. With the foundation of Indian Museum in 1814, the Museum movement started rolling in India and through the year…
    </h5>
    </div>
</div>
</div>
<div class=" my-4">
  <h2 class="text-center text-warning text-decoration-underline">
    Gallery
  </h2>
  <div class="row g-3 mx-4 my-4">
  <div class="card col-md-3 col-sm-6 bg-dark">
  <img class="card-img-top" src="img/coin_category.jpeg" alt="Card image cap" height="300" width="300">
  <div class="card-body">
    <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="coins.php" class="btn btn-warning d-flex justify-content-center">Coins Gallery</a>
  </div>
</div>
<div class="card col-md-3 col-sm-6 bg-dark">
  <img class="card-img-top" src="img/painting2.jpeg" alt="Card image cap" height="300" width="300">
  <div class="card-body">
    <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="paintings.php" class="btn btn-warning d-flex justify-content-center">Paintings Gallery</a>
  </div>
</div>
<div class="card col-md-3 col-sm-6 bg-dark">
  <img class="card-img-top" src="img/archaeology.png" alt="Card image cap" height="300" width="300">
  <div class="card-body">
    <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="arch.php" class="btn btn-warning d-flex justify-content-center">Archaeology Gallery</a>
  </div>
</div>
<div class="card col-md-3 col-sm-6 bg-dark">
  <img class="card-img-top" src="img/manu2.jpeg" alt="Card image cap" height="300" width="300">
  <div class="card-body">
    <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="manu.php" class="btn btn-warning d-flex justify-content-center">Manuscripts Gallery</a>
  </div>
</div>

</div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">

<!-- Footer -->
<footer
        class="text-center text-lg-start text-white"
        style="background-color: #1c2331"
        >
  <!-- Section: Social media -->
  <section
           class="d-flex justify-content-between p-4"
           style="background-color: #6351ce"
           >
    <!-- Left -->
    <div class="me-5">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold">Computer Science and Technology</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            This is a virtual Museum created for the purpose of the Mini Project of 3rd semester.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Products</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            <a href="#!" class="text-white">MDBootstrap</a>
          </p>
          <p>
            <a href="#!" class="text-white">MDWordPress</a>
          </p>
          <p>
            <a href="#!" class="text-white">BrandFlow</a>
          </p>
          <p>
            <a href="#!" class="text-white">Bootstrap Angular</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Useful links</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            <a href="#!" class="text-white">Your Account</a>
          </p>
          <p>
            <a href="#!" class="text-white">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!" class="text-white">Shipping Rates</a>
          </p>
          <p>
            <a href="#!" class="text-white">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Contact</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p><i class="fas fa-home mr-3"></i> IIEST,SHIBPUR</p>
          <p><i class="fas fa-envelope mr-3"></i> drupacharya@gmail.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 91 9007037415</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: rgba(0, 0, 0, 0.2)"
       >
    © 2023 Copyright:
    <a class="text-white" href="https://www.iiests.ac.in/"
       >IIEST</a
      >
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</div>
<!-- End of .container -->
</html>