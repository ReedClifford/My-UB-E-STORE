<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Ub-E-Store</title>

  <!-- favicon -->
  <link rel="icon" href="favicon (9).ico" />
  <!-- favicon -->

  <!-- css stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/index.css" />


  <!-- css stylesheets -->

  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- fontawesome cdn -->

  <!-- bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- bootstrap scripts -->
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top   py-4 px-4">
    <div class="container-fluid">
      <a href=""><img src="images/ubwhitelogo.png" alt="" width="160" height="45" class="d-inline-block align-text-top " /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link" href="https://ebrahman.ub.edu.ph/index.html">E-Brahman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://ubian.neolms.com/">Ubian LMS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section4">PVMO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

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
          <img src="images/loginpage/main.jpeg" alt="...">
          <div class="carousel-caption mt-2 px-3">
            <h4>Welcome to</h4>
            <h5 class="fw-bolder">My UB E-Store</h5>
            <p class="fw-normal">E-commerce store for University of Batangas Bookstore</p>
            <div class="slider-button mx-auto">
              <a href="login.php"><button class="shopnowbtn">Shop Now</button></a>
              <a href="#section2"><button class="aboutusbtn">About Us</button></a>

            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/loginpage/main4.jpeg" alt="...">
          <div class="carousel-caption mt-2 px-3 ">
            <h4>My UB E-Store</h4>
            <h5 class="text-center">Shop Books</h5>
            <p class="text-center">Check prices and availability</p>
            <div class="slider-button mx-auto">
              <a href="login.php"><button class="shopnowbtn">Shop Now</button></a>
              <a href="#section2"><button class="aboutusbtn">About Us</button></a>

            </div>

          </div>
        </div>
        <div class="carousel-item">
          <img src="images/loginpage/main3.jpeg " alt="...">
          <h4>Welcome to</h4>
          <div class="carousel-caption mt-2 px-3">
            <h4>My UB E-Store</h4>
            <h5>Uniforms</h5>
            <p>Check Sizes and Prizes</p>
            <div class="slider-button mx-auto">
              <a href="login.php"><button class="shopnowbtn">Shop Now</button></a>
              <a href="#section2"><button class="aboutusbtn">About Us</button></a>
            </div>
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


  <!-- section2 ABOUTUS -->
  <section id="section2">
    <h1 class="fw-bolder fs-1 text-center  px-5 py-2  ">About Us</h1>
    <p class="fw-normal fs-6 px-5">
      This study/project was exclusively aimed to develop a web-based e-commerce application that will be used by the University of Batangas Bookstore. One of its main goals is to establish a more reliable and efficient way of simply looking up or checking the availability of the necessities that a student needs in the bookstore, rather than doing the traditional way of visiting the actual store itself within the University. One of the downsides of the traditional way is communication, users can't simply rely on just making telephone calls to ask if a certain item is available. What if many students are making a call at the bookstore? Then the personnel can't accommodate them all at the same time. In this pandemic situation, users can't simply go out due to the protocols that the government implemented. It is a hassle for a user when they are far from the University, just to ask or check if the item that is needed is available. What if it's out of stock? The amount of time that you invested in visiting the physical store itself is a complete waste.
      This website will have ordering, add to cart and payment features, it will also indicate the information about the items stock availability. The products that are shown in the system are only limited to uniforms, books and some University merch. All the other school necessities like papers, index cards etc. are not included in the system.

      <br>
      <br>
      This work is the consequence of numerous and enormous sacrifices. This study is dedicated to our dear parents, who have always been a source of inspiration and motivation for us, giving us strength when we were about to give up, and who continue to morally, spiritually, emotionally, and financially support us.
      To our friends, classmates, and families who have consoled, advised, and encouraged us to complete this research.
      To Sir Vinz Jonas Cruz, our adviser, for his advice and assistance that helped us excel in our study.
      And, most importantly, we dedicated this book to our God, who assisted us by providing strength and knowledge, as well as guiding us through the conclusion of our study. Thank you so much, Lord.
    </p>
  </section>
  <!-- section2 -->


  <!-- section3 GROUP9-->

  <!-- section3 -->

  <!-- section4 PVMO -->
  <section id="section4">

    <div class="container mx-auto  border shadow-lg  mt-5 mb-5 bg-body rounded py-5 px-5">
      <h1 class="fw-bolder fs-1 text-center  px-4 py-6   ">PVMO</h1>
      <div class="row  ">
        <div class="col mission shadow p-3 mb-5 bg-body rounded">
          <h4 class="text-center fw-bold fs-1 mx-2 my-5">Mission</h4>
          <p class="fw-normal mx-5 px-3 my-5">
            The University of Batangas provides quality education by promoting personal and professional growth and enabling the person to participate in a global, technology- and research-driven environment.
          </p>
        </div>
        <div class="col vision shadow p-3 mb-5 bg-body rounded">
          <h4 class="text-center fw-bold fs-1 mx-2 my-5">Vision</h4>
          <p class="fw-normal mx-5 px-3 my-5">
            We envision the University of Batangas to be a center of excellence committed to serve the broader community through quality education.
          </p>
        </div>
      </div>
      <div class="row my-2 mx-2 ">
        <div class="col philosophy mx-2 my-5 shadow p-3 mb-5 bg-body rounded">
          <h4 class="text-center fw-bold fs-1 pt-5 pb-3">Philosophy</h4>
          <p class="fw-normal px-5 pb-5">The University of Batangas, a stock non-sectarian, private educational institution, believes in the pursuit of knowledge, values and skills necessary for the preservation and improvement of the Philippine society. It has faith in the dignity of the human person, in the democratic process, in the reward for individual excellence, and in the freedom of a person to worship God according to his conscience. Thus, the institution believes that the development of the individual as a person and worker is an effective means in building a better family, community and nation, and a better world.</p>

        </div>
      </div>
      <div class="row my-2 mx-2">
        <div class="col objectives mx-2 my-5 shadow p-3 mb-5 bg-body rounded">
          <h4 class="text-center fw-bold fs-1 px-1 pt-5 pb-3">Objectives</h4>
          <h5 class="text-center fw-bold fs-4">The University of Batangas aims to:</h5>
          <ul class=" fw-normal fs-6  px-5 pt-2 pb-5">
            <li>
              Pursue academic excellence through continuing search for the
              application of truth, and knowledge and wisdom via traditional
              and alternative modes of instructional delivery.
            </li>
            <li>
              Promote moral and spiritual development through an integrated
              educational process that will enhance human character and
              dignity;
            </li>
            <li>
              Develop cultural, economic and socio-civic conscience through
              an educational content relevant to national development needs,
              conditions and aspirations;
            </li>
            <li>
              Strengthen involvement in community services through varied
              economic and environmental projects;
            </li>
            <li>
              Attain institutional self-reliance through responsive programs
              for staff, facilities and systems development;
            </li>
            <li>Ensure financial viability and profitability</li>
            <li>
              Adopt internationalization to meet the shifting demands in the
              national, regional and global labor environment; and
            </li>
            <li>
              Increase the University's productivity and innovation in
              research, scholarship and creative activities that impact
              economic and societal development
            </li>
          </ul>

        </div>
      </div>


    </div>
  </section>
  <!-- section4 -->

  <script src="js/index.js"></script>
</body>
<!-- Remove the container if you want to extend the Footer to full width. -->

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
<!-- Footer -->

<!-- End of .container -->

</html>