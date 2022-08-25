<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uniforms</title>
  <!-- favicon -->
  <link rel="icon" href="favicon (9).ico" />
  <!-- favicon -->

  <!-- css stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/uniforms.css" />
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
            <a class="nav-link " href="landing-page.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="books.php">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="uniforms.php">Uniform</a>
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



  <!-- section1 -->
  <section id="section1">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/shop/slider/uniform.jpg" alt="..." class="image-fluid">
          <div class="carousel-caption mt-2 px-3">
            <h4 class="text-center">My Ub-E-Store</h4>
            <h5 class="fw-bolder text-center">Uniforms Section</h5>
            <p class="fw-normal text-center">Check Sizes and Prices</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/uniforms/header2.jpeg" alt="..." class="image-fluid">
          <div class="carousel-caption mt-2 px-3 ">
            <h4 class="text-center">Uniforms</h4>
            <h5 class="fw-bolder text-center">Check Availabilty</h5>
            <p class="fw-normal text-center">Check Sizes and Prices</p>
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
  <!-- section1 -->





  <!-- section6 -->
  <!-- <section id="section6">
    <div class="container border mt-5 shadow px-5 py-5 mb-5 bg-body rounded">
      <h4 class="fw-bolder  fs-4 pt-4">List of Items & Prizes</h4>
      <hr>
      <div class="row">
        <div class="col col-lg-6">
          <h4 class="fw-bolder fs-4 text-center">JHs/SHS PE Uniform</h4>

          <table class="table table-dark table-stripped table-hover">
            <thead>
              <tr>
                <th scope="col">T-Shirt Size</th>
                <th scope="col">T-Shirt Prize</th>
                <th scope="col">Jogging Pants Size</th>
                <th scope="col">Jogging Pants Prize</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">XS</th>
                <td>Php 290</td>
                <td>XS</td>
                <td>Php 620</td>
              </tr>
              <tr>
                <th scope="row">Small</th>
                <td>Php 290</td>
                <td>Small</td>
                <td>Php 620</td>
              </tr>
              <tr>
                <th scope="row">Medium</th>
                <td>Php 305</td>
                <td>Medium</td>
                <td>Php 620</td>
              </tr>
              <tr>
                <th scope="row">Large</th>
                <td>Php 305</td>
                <td>Medium</td>
                <td>Php 620</td>
              </tr>
              <tr>
                <th scope="row">XL</th>
                <td>Php 335</td>
                <td>XL</td>
                <td>Php 635</td>
              </tr>
              <tr>
                <th scope="row">2XL</th>
                <td>Php 350</td>
                <td>2XL</td>
                <td>Php 635</td>
              </tr>
              <tr>
                <th scope="row"> 3XL</th>
                <td>Php 365</td>
                <td>3XL</td>
                <td>Php 650</td>
              </tr>
              <tr>
                <th scope="row">4XL</th>
                <td>Php 380</td>
                <td>4XL</td>
                <td>Php 650</td>
              </tr>

            </tbody>
          </table>

        </div>
        <div class="col col-lg-6">
          <h4 class="fw-bolder fs-4 text-center"> College Pe Uniform</h4>

          <table class="table table-dark table-stripped table-hover">
            <thead>
              <tr>
                <th>T-Shirt Size</th>
                <th>T-Shirt Prize</th>
                <th>Jogging Pants Size</th>
                <th>Jogging Pants Prize</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">XS</th>
                <td>Php 275</td>
                <td>XS</td>
                <td>Php 360</td>
              </tr>
              <tr>
                <th scope="row">Small</th>
                <td>Php 2675</td>
                <td>Small</td>
                <td>Php 360</td>
              </tr>
              <tr>
                <th scope="row">Medium</th>
                <td>Php 290</td>
                <td>Medium</td>
                <td>Php 375</td>
              </tr>
              <tr>
                <th scope="row">Large</th>
                <td>Php 290</td>
                <td>Large</td>
                <td>Php 375</td>
              </tr>
              <tr>
                <th scope="row">XL</th>
                <td>Php 290</td>
                <td>XL</td>
                <td>Php 375</td>
              </tr>
              <tr>
                <th scope="row">2XL</th>
                <td>Php295</td>
                <td>2XL</td>
                <td>Php 405</td>
              </tr>
              <tr>
                <th scope="row">3XL</th>
                <td>Php 310</td>
                <td>3XL</td>
                <td>Php 405</td>
              </tr>
              <tr>
                <th scope="row">4XL</th>
                <td>Php 325</td>
                <td>4XL</td>
                <td>Php 450</td>
              </tr>
            </tbody>
          </table>

        </div>

      </div>
      <div class="row">
        <div class="col lg-6 md-5 mt-5">
          <h4 class="fw-bolder fs-4 text-center">Female College Uniform</h4>

          <table class="table table-dark table-stripped table-hover">
            <thead>
              <tr>
                <th scope="col">Girls Blouse</th>
                <th scope="col">Skirt</th>
                <th scope="col">Vest S-XL</th>
                <th scope="col">Vest 2XL-5XL</th>
                <th scope="col">Necktie</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Php 525</th>
                <td>Php 525</td>
                <td>Php 500</td>
                <td>Php 525</td>
                <td>Php 250</td>
              </tr>


            </tbody>

          </table>

        </div>
        <div class="col lg-6 md-5 mt-5">
          <h4 class="fw-bolder fs-4 text-center">Male College Uniform</h4>

          <table class="table table-dark table-stripped table-hover">
            <thead>
              <tr>
                <th scope="col">Boys Polo</th>
                <th scope="col">Boys Pants</th>
                <th scope="col">Necktie</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Php 525</th>
                <td>Php 525</td>

                <td>Php 250</td>
              </tr>


            </tbody>

          </table>

        </div>


      </div>
      <div class="row">

        <div class="col col-lg-6 mt-5 mt-5">
          <h4 class="fw-bolder fs-4 text-center">Criminology</h4>

          <table class="table table-dark table-stripped table-hover">
            <thead>
              <tr>
                <th scope="col">Polo</th>
                <th scope="col">Pants</th>
                <th scope="col">Pin</th>
                <th scope="col">Nameplate
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Php 575</th>
                <td>Php 575</td>
                <td>Php 90</td>
                <td>Php 260</td>
              </tr>


            </tbody>
          </table>

        </div>
        <div class="col col-lg-6 mt-5 mt-5">
          <h4 class="fw-bolder fs-4 text-center">Tourism</h4>

          <table class="table table-dark table-stripped table-hover">
            <thead>
              <tr>
                <th scope="col">Tourism Male</th>
                <th scope="col">Tourism Female</th>
                <th scope="col">Coat Only</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Php 1700</th>
                <td>Php 1800</td>
                <td>Php 900</td>

              </tr>


            </tbody>

          </table>

        </div>

      </div>
      <div class="row">
        <div class="col col-lg-6 mt-5">
          <h4 class="fw-bolder fs-4 text-center">JHS School Uniform</h4>

          <table class="table table-dark table-stripped table-hover">
            <thead>
              <tr>
                <th scope="col">Female Longsleeve</th>
                <th scope="col">Female Skirt</th>
                <th scope="col">Female Vest</th>
                <th scope="col">Female Ribbon</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Php 625</th>
                <td>Php 450</td>
                <td>Php 475</td>
                <td>Php 60</td>
              </tr>


            </tbody>
            <thead>
              <tr>
                <th scope="col">Male Polo</th>
                <th scope="col">Male Pants</th>
                <th scope="col">Male Vest</th>
                <th scope="col">Necktie</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Php 525</th>
                <td>Php 525</td>
                <td>Php 475</td>
                <td>Php 110</td>
              </tr>


            </tbody>
          </table>

        </div>
        <div class="col col-lg-6 mt-5">
          <h4 class="fw-bolder fs-4 text-center">SHS School Uniform</h4>

          <table class="table table-dark table-stripped table-hover">
            <thead>
              <tr>
                <th scope="col">Female Blouse</th>
                <th scope="col">Female Skirt</th>
                <th scope="col">Female Vest</th>
                <th scope="col">Female Necktie</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Php 625</th>
                <td>Php 500</td>
                <td>Php 575</td>
                <td>Php 185</td>
              </tr>


            </tbody>
            <thead>
              <tr>
                <th scope="col">Male Polo</th>
                <th scope="col">Male Pants</th>
                <th scope="col">Male Vest</th>
                <th scope="col">Necktie</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Php 625</th>
                <td>Php 600</td>
                <td>Php 550</td>
                <td>Php 185</td>
              </tr>


            </tbody>
          </table>

        </div>

      </div>

    </div>
  </section> -->
  <!-- section3 -->
  <section id="section3">
    <div class="container border py-5 mt-5 shadow  mb-5 bg-body rounded">
      <h4 class="fw-bolder fs-4">Junior High-School</h4>
      <hr>
      <!-- merch -->
      <div class="owl-carousel owl-theme">

        <div class="item py-2 bg-light">
          <div class="merch ">
            <a href="uniformmain2.php"><img src="images/uniforms/girls-jhs-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center ">
              <h6 class="fw-bold mt-2">Junior Hs Female Uniform</h6>

            </div>
          </div>
        </div>
        <div class="item py-2 bg-light">
          <div class="merch font-bold">
            <a href="uniformmain2.php"><img src="images/uniforms/boys-jhs-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">Junior Hs Male Uniform</h6>

            </div>
          </div>
        </div>
        <div class="item py-2 bg-light">
          <div class="merch font-bold">
            <a href="uniformmain2.php"><img src="images/uniforms/pe-jhs1-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">JHS g7 Pe uniform</h6>

            </div>
          </div>
        </div>
        <div class="item py-2 bg-light">
          <div class="merch font-bold">
            <a href="uniformmain2.php"><img src="images/uniforms/pe-jhs4-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">JHS g8 Pe uniform</h6>

            </div>
          </div>
        </div>
        <div class="item py-2 bg-light">
          <div class="merch font-bold">
            <a href="uniformmain2.php"><img src="images/uniforms/pe-jhs2-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">JHS g9 Pe uniform</h6>

            </div>
          </div>
        </div>
        <div class="item py-2 bg-light">
          <div class="merch font-bold">
            <a href="uniformmain2.php"><img src="images/uniforms/pe-jhs3-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2"> JHS g10 Pe uniform</h6>

            </div>
          </div>
        </div>
      </div>
      <!-- merch -->

    </div>

  </section>
  <!-- section3 -->


  <!-- section4 -->
  <section id="section4">
    <div class="container  border py-5 mt-5 shadow  mb-5 bg-body rounded">
      <h4 class="fw-bolder fs-4">Senior High-School</h4>
      <hr>
      <!-- merch -->
      <div class="owl-carousel owl-theme">

        <div class="item py-2 bg-light">
          <div class="merch ">
            <a href="uniformmain3.php"><img src="images/uniforms/girls-shs-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center ">
              <h6 class="fw-bold mt-2">Senior Hs Female Uniform</h6>

            </div>
          </div>
        </div>
        <div class="item py-2 bg-light">
          <div class="merch font-bold">
            <a href="uniformmain3.php"><img src="images/uniforms/boys-shs-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">Senior Hs Male Uniform</h6>

            </div>
          </div>
        </div>

        <div class="item py-2 bg-light">
          <div class="merch font-bold">
            <a href="uniformmain3.php"><img src="images/uniforms/pe-shs-g11-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">SHS G-11 Pe Uniform</h6>

            </div>
          </div>
        </div>
        <div class="item py-2 bg-light">
          <div class="merch font-bold">
            <a href="uniformmain3.php"><img src="images/uniforms/pe-shs-g12-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">SHS G-12 Pe Uniform</h6>

            </div>
          </div>
        </div>

      </div>
      <!-- merch -->

    </div>

  </section>
  <!-- section4 -->

  <!-- section5 -->
  <section id="section5">
    <div class="container  border py-5 my-5 shadow  mb-5 bg-body rounded">
      <h4 class="fw-bolder fs-4">College</h4>
      <hr>
      <!-- merch -->
      <div class="owl-carousel owl-theme">

        <div class="item py-2 bg-light">
          <div class="merch ">
            <a href="uniformmain4.php"><img src="images/uniforms/boys-college.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center ">
              <h6 class="fw-bold mt-2">College Male Uniform</h6>
            </div>
          </div>
        </div>
        <div class="item py-2 bg-light">
          <div class="merch font-bold">
            <a href="uniformmain4.php"><img src="images/uniforms/girls-college.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">College Female Uniform</h6>

            </div>
          </div>
        </div>
        <div class="item py-2 bg-light">
          <div class="merch font-bold">
            <a href="uniformmain4.php"><img src="images/uniforms/pe-college-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">College PE Uniform</h6>

            </div>
          </div>
        </div>
        <div class="item py-2 bg-light">
          <div class="merch font-bold">
            <a href="uniformmain4.php"><img src="images/uniforms/nursing-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">Nursing Uniform</h6>

            </div>
          </div>
        </div>
        <div class="item py-2 bg-light">
          <div class="merch font-bold">
            <a href="uniformmain4.php"><img src="images/uniforms/girl-tourism-removebg-preview.png" alt="" class="img-fluid img-thumbnail"></a>
            <div class="text-center">
              <h6 class="fw-bold mt-2">Tourism Uniform</h6>

            </div>
          </div>
        </div>

      </div>
      <!-- merch -->

    </div>

  </section>
  <!-- section5 -->

<!-- Footer -->
<footer class="text-center text-lg-start text-white " style="background-color: #4F0E0E">
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





  <!-- jquerycdn -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- owlcarouselcdn script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- isotope -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script src="js/index.js"></script>
</body>



</html>