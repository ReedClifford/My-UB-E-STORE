<?php
session_start();
include "include/connect.php";


require_once("include/componentmerch.php");

// if (isset($_SESSION['uid']) && isset($_SESSION['pwd'])) {
  
// }







?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My UB-E-STORE</title>
  <!-- favicon -->
  <link rel="icon" href="favicon (9).ico" />
  <!-- favicon -->

  <!-- css stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/landing-page.css" />
  <style>
    @media (max-width:400px) {
      .carousel-caption {
        bottom: 5em;
      }

      .carousel-caption h5 {
        font-size: 2em;
        font-weight: bolder;
      }

      .carousel-caption p {
        font-size: 1em;
      }

      #section2 grid-item {
        align-items: center;
      }
    }
  </style>



  <!-- css stylesheets -->


  <!-- owl-carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- owl-carousel -->


  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- fontawesome cdn -->


  <!-- bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- bootstrap scripts -->
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top   py-4 px-4">
    <div class="container-fluid">
      <a href="landing-page.php"><img src="images/ubwhitelogo.png" alt="" width="160" height="45" class="d-inline-block align-text-top" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="books.php">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="uniforms.php">Uniform</a>
          </li>

          <li class="nav-item">
            <?php
            require_once("include/cartlink.php")
            ?>
          </li>
          <li class="nav-item">
            <a href="php-scripts/logout.php"><button class=" logoutbtn"> <i class="fas fa-sign-out-alt"></i> Logout</button></a>

          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- section 1 slider CAROUSEL-->
  <section id="section1">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/loginpage/main3.jpeg" alt="...">
          <div class="carousel-caption mt-2 px-3">
            <h4 class="text-center">Welcome to</h4>
            <h5 class="fw-bolder text-center">My UB E-Store</h5>
            <p class="fw-normal text-center">E-commerce store for University of Batangas Bookstore</p>


          </div>
        </div>
        <div class="carousel-item">
          <img src="images/loginpage/main4.jpeg" alt="...">
          <div class="carousel-caption mt-2 px-3 ">
            <h4 class="text-center">My UB E-Store</h4>
            <h5 class="text-center">Shop Books</h5>
            <p class="text-center">Check prices and availability</p>
          
          </div>

        </div>
        <div class="carousel-item">
          <img src="images/shop/slider/uniform.jpg " alt="...">
          <h4>Welcome to</h4>
          <div class="carousel-caption mt-2 px-3">
            <h4 class="text-center">My UB E-Store</h4>
            <h5 class="text-center">Uniforms</h5>
            <p class="text-center">Check Sizes and Prizes</p>
          </div>

        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>
  <!-- section 1 slider -->

  <!-- section2 features -->
  <section id="section2">
    <div class="container border  my-5 shadow  mb-5 bg-body rounded px-5 py-5">
      <h4 class="fw-bolder fs-4">Features</h4>
      <hr>
      <div class="container-fluid border">
        <div class="row">
          <div class="col col mx-2 my-3 py-5 px-5 feature1">
            <i class="fas fa-user fa-4x"></i>
            <p class="fs-6  mt-4 text-center px-4">Exclusive only for the Brahmans,Login using ubian account.</p>
          </div>
          <div class="col col mx-2 my-3 py-5 px-5 feature2">
            <i class="fas fa-shopping-cart fa-4x"></i>
            <p class="fs-6  mt-4 text-center px-4">It eases the purchasing process by allowing the user to make a purchase online. </p>
          </div>
          <div class="col col mx-2 my-3 py-5 px-5 feature3">
            <i class="fas fa-search fa-4x "></i>
            <p class="fs-6  mt-4 text-center px-4">User Friendly Easy to Use and Navigate </p>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- section2 features -->

  <!-- section 3 merch owl carousel -->
  <section id="section3">
    <div class="container border py-5 px-5 my-2 shadow  mb-5 bg-body rounded">
      <h4 class="fw-bolder fs-4">University Merch</h4>
      <hr>
      <!-- merch -->
      <div class="owl-carousel owl-theme">

        <div class="item py-2 bg-light">
          <!-- <div class="merch ">
            <a href=""><img src="images/Merch/m1.jpg" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center ">
              <h6 class="fw-bold mt-2">UB-Black Tumbler</h6>
              <div class="rating fw-4 text-warning">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">350php</div>
              <button type="submit" class="btn btn-outline-danger fw-bold mx-auto"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
            </div>
          </div> -->
          <?php
          merch("images/Merch/m1.jpg", "UB-Black Tumbler", "Php 350.00");
          ?>
        </div>
        <div class="item py-2 bg-light">
          <!-- <div class="merch font-bold">
            <a href=""><img src="images/Merch/m2.jpg" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2"> Ub Transparent Tumbler</h6>
              <div class="rating fw-4 text-warning">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">200php</div>
              <button type="submit" class="btn btn-outline-danger fw-bold"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
            </div>
          </div> -->
          <?php
          merch("images/Merch/m2.jpg", "Ub Transparent Tumbler", "Php 200.00");
          ?>
        </div>
        <div class="item py-2 bg-light">
          <!-- <div class="merch font-bold">
            <a href=""><img src="images/Merch/m3.jpg" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2"> UB-BallPen</h6>
              <div class="rating fw-4 text-warning">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">20php</div>
              <button type="submit" class="btn btn-outline-danger fw-bold"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
            </div>
          </div> -->
          <?php
          merch("images/Merch/m3.jpg", "UB-BallPen", "Php 20.00");
          ?>
        </div>
        <div class="item py-2 bg-light">
          <!-- <div class="merch font-bold">
            <a href=""><img src="images/Merch/m4.jpg" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">UB-Mini Tumbler</h6>
              <div class="rating fw-4 text-warning">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">160php</div>
              <button type="submit" class="btn btn-outline-danger fw-bold"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
            </div>
          </div> -->
          <?php
          merch("images/Merch/m4.jpg", "UB Mini Tumbler", "Php 160.00");
          ?>

        </div>
        <div class="item py-2 bg-light">
          <!-- <div class="merch font-bold">
            <a href=""><img src="images/Merch/m5.jpg" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">UB-Stainless Mini Tumbler</h6>
              <div class="rating fw-4 text-warning">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">180php</div>
              <button type="submit" class="btn btn-outline-danger fw-bold"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
            </div>
          </div> -->
          <?php
          merch("images/Merch/m5.jpg", "UB-Stainless", "Php 180.00");
          ?>
        </div>
        <div class="item py-2 bg-light">
          <!-- <div class="merch font-bold">
            <a href=""><img src="images/Merch/m6.jpg" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2"> UB-Medium Tumbler</h6>
              <div class="rating fw-4 text-warning">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">220php</div>
              <button type="submit" class="btn btn-outline-danger fw-bold"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
            </div>
          </div> -->
          <?php
          merch("images/Merch/m6.jpg", "UB-Medium Tumbler", "Php 220.00");
          ?>
        </div>
        <div class="item py-2 bg-light">
          <!-- <div class="merch font-bold">
            <a href=""><img src="images/Merch/m7.jpg" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">UB-Red Tumbler</h6>
              <div class="rating fw-4 text-warning ">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">350php</div>
              <button type="submit" class="btn btn-outline-danger  fw-bold"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
            </div>
          </div> -->
          <?php
          merch("images/Merch/m7.jpg", "UB-Red Tumbler", "Php 350.00");
          ?>
        </div>



      </div>
      <!-- merch -->

    </div>

  </section>
  <!-- section 3 merch owl carousel -->

  <!-- section4 -->
  <section id="section4">
    <div class="container border py-5 px-5 my-5 shadow  mb-5 bg-body rounded">
      <h4 class="fw-bolder fs-4">Product Category</h4>
      <hr>
      <div class="container-fluid">
        <div class="row my-3">
          <!-- Bookss -->
          <div class="books col mx-2 mt-3 py-5 px-5 shadow-lg  mb-5 bg-body rounded">
            <a href="books.php" class="text-white">
              <h1 class="text-center fw-bold my-4">Books</h1>
            </a>
          </div>
          <!-- Bookss -->

          <!-- Uniforms -->
          <div class="uniform col mx-2 mt-3 py-5  px-5 shadow-lg  mb-5 bg-body rounded">
            <a href="uniforms.php" class="text-white">
              <h1 class="text-center fw-bold my-4">Uniforms</h1>
            </a>
          </div>
          <!-- Uniforms -->
        </div>
        <!-- Bookss -->



      </div>
    </div>
  </section>
  <!-- section4 -->

  <!-- section5 faq's -->
  <section id="section5">
    <div class="container border py-5 px-5 my-2 shadow  mb-5 bg-body rounded">
      <h4 class="fw-bolder fs-4">Faq's</h4>
      <hr>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header " id="headingOne">
            <button class="accordion-button  bg-dark text-white fw-bold fs-5 py-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Availability of the Books?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse mt-3 collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Right now only the engineering department have there books on our inventory.Other college departments including senior high pulled out there books. </strong> <br>You can check the availability of the books on the books section of the page <a href="books.php">Click Here...</a>.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button bg-dark text-white mt-3 collapsed fw-bold fs-5 py-5 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Availability of the Uniforms?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>We have large quantity of stocks in our inventory per uniform piece that is pre-made at the start every semester.</strong> <br>You can check the sizes and prices on the uniform section of the page <a href="uniforms.php">Click Here...</a>.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button bg-dark text-white mt-3 collapsed fw-bold fs-5 py-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Store hours? What time does the store open and closes?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body border">
              <strong>Store hours is 9am-4pm Monday-Saturday.</strong>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- section5 faq's -->


  <!-- jquerycdn -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- owlcarouselcdn script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="js/index.js"></script>

</body>
<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #4F0E0E">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <a href="#"><img class="my-2" src="images/footer/footer.png" alt="" srcset="" /></a>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">University Links</h6>
          <p>
            <a href="https://ubian.neolms.com/" class="text-white">Ubian LMS</a>

          </p>
          <p>
            <a href="https://ebrahman.ub.edu.ph/index.html" class="text-white">E-brahman</a>
          </p>
          <p>
            <a href="http://ub.edu.ph/" class="text-white">University Official Website</a>
          </p>

        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">
            Useful links
          </h6>
          <p>
            <a href="https://enrollment.ub.edu.ph/admission/campus-select-login.html" class="text-white">Online Admission</a>
          </p>
          <p>
            <a href="https://enrollment.ub.edu.ph/online.registration/" class="text-white">Online Enrollment</a>
          </p>
          <p>
            <a href="https://ubsd.ub.edu.ph/ubopbc/" class="text-white"> Payment Channel</a>
          </p>

        </div>

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p><i class="fas fa-home mr-3"></i> Hilltop, Batangas, 4200 Batangas</p>
          <p><i class="fas fa-envelope mr-3"></i> Wbdc@ub.edu.ph</p>
          <p><i class="fas fa-phone mr-3"></i> (043) 722 0877 </p>

        </div>
        <!-- Grid column -->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->

    <hr class="my-3">

    <!-- Section: Copyright -->
    <section class="p-3 pt-0">
      <div class="  align-items-center">
        <!-- Grid column -->
        <div class="text-center">
          <!-- Copyright -->
          <div class="p-3">
            © 2021 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">Group 9 Capstone Project</a>
          </div>
          <!-- Copyright -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="text-center">
          <!-- Facebook -->
          <a href="https://www.facebook.com/search/top?q=university%20of%20batangas" class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-facebook-f"></i></a>

          <!-- Twitter -->
          <a href="https://twitter.com/UBatangas" class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-twitter"></i></a>

          

          <!-- Instagram -->
          <a href="https://www.instagram.com/ubatangas/" class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i class="fab fa-instagram"></i></a>
        </div>
        <!-- Grid column -->
      </div>
    </section>
    <!-- Section: Copyright -->
  </div>
  <!-- Grid container -->
</footer>

</html>