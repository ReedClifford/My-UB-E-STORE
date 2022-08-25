<?php
session_start();
include "include/connect.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link rel="icon" href="favicon (9).ico" />
  <!-- favicon -->

  <!-- css stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/admindashboard.css" />
  <style>
    .navbar {
      font-family: 'Open Sans', sans-serif;
      background: none;




    }

    .navlink {
      text-decoration: none;
      cursor: pointer;
    }

    td img {
      width: 7em;
    }

    .carousel-item {
      max-height: 55vh;
      -webkit-background-size: cover;
      background-size: cover;

    }

    .carousel-item::before {
      content: "";
      display: block;
      position: absolute;
      top: 0%;
      left: 0%;
      bottom: 0%;
      right: 0%;
      background: #000;
      opacity: 0.7;
    }

    .carousel-caption {
      bottom: 2em;
    }

    .carousel-caption h4 {
      color: #c4c3c3;
    }

    .carousel-caption h5 {
      font-size: 4em;
      font-weight: bolder;
    }

    .carousel-caption p {
      font-size: 1.2em;
      color: #c4c3c3;
    }

    .btn-outline-danger:hover {
      background-color: #4F0E0E;
      color: whitesmoke;
      border: #4b1002;
    }

    #section2 .active2 {
      background-color: rgb(218, 210, 210);

    }

    #section2 a {
      color: black;

    }

    #section2 a:hover {
      background-color: darkgrey;
    }

    #section1 .disabled {
      color: grey;
    }


    @media (max-width:400px) {
      .carousel-caption {
        bottom: 1em;
      }

      .carousel-caption h5 {
        font-size: 10px;
        font-weight: bolder;
      }

      .carousel-caption p {
        font-size: .5em;
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




</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top  py-3 px-2  ">
    <div class="container-fluid">

      <a href="admin-dashboard.php"><img src="images/UBlogo.png" alt="" width="120" height="40" class="d-inline-block align-text-top" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center fs-6 ">


          <li class="nav-item">
            <a href="php-scripts/logoutadmin.php"><button class="logoutbtn">
                <i class="fas fa-sign-out-alt"></i> Logout
              </button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="section1">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/admin1.jpeg" alt="...">
          <div class="carousel-caption mt-2 px-3">
            <h4 class="text-center">My Ub-E-Store</h4>
            <h5 class="fw-bolder text-center">Admin</h5>
            <p class="fw-normal text-center">Admin Panel for Bookstore Personels</p>


          </div>
        </div>
        <div class="carousel-item">
          <img src="images/admin2.jpeg" alt="...">
          <div class="carousel-caption mt-2 px-3 ">

            <h5 class="text-center mb-5">Add Books</h5>
            <p class="fw-normal text-center">to the inventory</p>

          </div>

        </div>
        <div class="carousel-item">
          <img src="images/admin3.jpeg " alt="...">

          <div class="carousel-caption mt-2 px-3">

            <h5 class="text-center mb-5">Update And Delete</h5>
            <p class="fw-normal text-center">items in the inventory</p>

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
  <section id="section2" class="my-5">
    <div class="container-fluid px-4 py-3">
      <div class="row">
        <div class="col col-lg-2 col-md-12 col-sm-12  col-xs-12">
          <nav class="nav flex-column border border-1 mt-6 nav-pills navbar-light bg-light sticky-top">
            <div class="bg-dark border  py-2 px-3">
              <h4 class="fs-4 fw-bold text-white-50"><i class="fas fa-user-shield fa-sm"></i> Administrator</h4>
            </div>
            <div class="bg-dark border  py-2 px-3">
              <a href="admin-dashboard.php#section2" class="navlink">
                <h6 class="fs-6 fw-normal text-white-50 text-wrap"><i class="fas fa-book-open"></i> Books Inventory</h6>
              </a>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-secondary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Manage Books
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <a class="nav-link " href="admin-dashboard2.php#section2">Engineering</a>
                  <a class="nav-link  active2" href="admin-dashboard3.php#section2">Nursing</a>
                  <a class="nav-link" href="admin-dashboard4.php#section2">General Education</a>
                  <a class="nav-link" href="admin-dashboard5.php#section2">CAS</a>
                  <a class="nav-link" href="admin-dashboard6.php#section2">CICT</a>
                  <a class="nav-link" href="admin-dashboard7.php#section2">Accountancy</a>
                  <a class="nav-link" href="admin-dashboard8.php#section2">Criminology</a>
                  <a class="nav-link" href="admin-dashboard9.php#section2">Tourism</a>
                  <a class="nav-link" href="admin-dashboard10.php#section2">TechEd</a>
                  <a class="nav-link" href="admin-dashboard11.php#section2">Stem</a>
                  <a class="nav-link" href="admin-dashboard12.php#section2">ABM</a>
                  <a class="nav-link" href="admin-dashboard13.php#section2">Techvoc</a>
                  <a class="nav-link" href="admin-dashboard14.php#section2">SHS General Ed</a>
                  <a class="nav-link" href="admin-dashboard15.php#section2">Grade 10</a>
                  <a class="nav-link" href="admin-dashboard16.php#section2">Grade 9</a>
                  <a class="nav-link" href="admin-dashboard17.php#section2">Grade 8</a>
                  <a class="nav-link" href="admin-dashboard18.php#section2">Grade 7</a>
                </div>
              </div>
            </div>
            <div class="bg-dark border  py-2 px-3">
              <a href="admin-uniform.php" class="navlink">
                <h6 class="fs-6 fw-normal text-white text-wrap"><i class="fa-solid fa-building-columns me-2"></i> Uniforms Inventory</h6>
              </a>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-secondary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Manage Items
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <a class="nav-link" href="admin-uniform2.php#section2">Junior High</a>
                  <a class="nav-link " href="admin-uniform3.php#section2">Senior High</a>
                  <a class="nav-link" href="admin-uniform4.php#section2">College</a>
                  <a class="nav-link" href="admin-uniform5.php#section2">Accesories</a>
                </div>
              </div>
            </div>
            <a class="nav-link  border bg-dark text-white-50" href="deliverydetails.php#section2"><i class="fas fa-truck me-2"></i>Deliveries</a>
            <a class="nav-link border disabled text-black-50" href="#">Merch</a>

          </nav>
        </div>
        <div class="col col-lg-10  col-md-12 col-sm-12 mb-5  col-xs-12">
          <div class="d-flex justify-content-between bg-dark py-3 px-3">
            <h5 class="fw-bolder  text-white-50   fs-4">Nursing Department Books </h5>
            <a href="addbooks3.php"> <button type="button" class="btn btn-warning text-white">
                Add Books
              </button></a>

          </div>
          <hr>

          <table class="table border border-1 table-secondary table-hover table-stripped my-5">
            <thead>
              <tr>
                <th>Id</th>
                <th>Book Name</th>
                <th>Price</th>
                <th>Book Image</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Manage</th>
              </tr>
            </thead>
            <tbody>

              <?php

              $sql = "SELECT * from nursing2";
              $result = mysqli_query($connect, $sql);
              if ($result) {


                while ($row = mysqli_fetch_assoc($result)) {
                  # code...
                  $id = $row['id'];
                  $bookname = $row['book_name'];
                  $bookprice = $row['book_prize'];
                  $bookimg = $row['book_img'];
                  $productqty = $row['product_quantity'];
                  echo "<tr>
                  <th scope='row'>$id</th>
                  <td>$bookname</td>
                  <td>$bookprice</td>
                  <td><img src = '$bookimg'/></td>
                  <td class = \"text-center\">$productqty</td>
                  <td class = \"text-center\">
                  <a href=\"adminupdate3.php?updateid3=$id\"> <button class=\"btn btn-success py-1 px-4 my-2\">Update</button></a>
                  <a href=\"admindelete3.php?deleteid3=$id\"> <button class=\"btn btn-danger py-1 px-4 my-2\">Delete</button></a>

                </td>
                  
                </tr>";
                }
                # code...
              }
              ?>




              <!-- <tr>
                <th scope="row">XS</th>
                <td>Php 275</td>
                <td>XS</td>
                <td>Php 360</td>
                <td>Php 360</td>
                <td>Php 360</td>
              </tr>
              <tr>
                <th scope="row">XS</th>
                <td>Php 275</td>
                <td>XS</td>
                <td>Php 360</td>
                <td>Php 360</td>
                <td>Php 360</td>
              </tr>
              <tr>
                <th scope="row">XS</th>
                <td>Php 275</td>
                <td>XS</td>
                <td>Php 360</td>
                <td>Php 360</td>
                <td>Php 360</td>
              </tr>
              <tr>
                <th scope="row">XS</th>
                <td>Php 275</td>
                <td>XS</td>
                <td>Php 360</td>
                <td>Php 360</td>
                <td>Php 360</td>
              </tr> -->

            </tbody>
          </table>



          <!-- Button trigger modal -->






          <a href="#"><button type="button" class="btn btn-outline-dark ">Back To Top</button></a>



        </div>
      </div>



    </div>
  </section>
  <!-- jquerycdn -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <!-- bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- bootstrap scripts -->

  <!-- owlcarouselcdn script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="js/index.js"></script>

  <!-- ADD script -->

  <!-- ADD script -->




</body>
<footer class="text-center text-lg-start text-white bg-dark">
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