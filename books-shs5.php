<?php
// start session
session_start();
require_once("include/connect.php");
// require_once("include/allBooksDb.php");
require_once("include/componentbooks.php");





if (isset($_POST['add'])) {




    if (isset($_SESSION['cart'])) {
        // print_r($_SESSION['cart']);



        # code...
        $book_item_id = array_column($_SESSION['cart'], 'book_id');
        // $book_name = array_column($_SESSION['cart'], 'book_name');
        // $_SESSION['bookname']= $book_name;
        // print_r($_SESSION['bookname']);

        echo "<script>window.location = 'books.php#section2'</script>";
        if (in_array($_POST['book_id'], $book_item_id)) {


            echo "<script>alert('Product is already in the cart!!')</script>";
            echo "<script>window.location = 'books.php#section2'</script>";
        } else {
            # code...
            $count = count($_SESSION['cart']);
            $book_array = array(
                'book_id' => $_POST['book_id']
            );
            $_SESSION['cart'][$count] = $book_array;
        }
    } else {
        # code...
        $book_array = array(
            'book_id' => $_POST['book_id']

        );

        //create new session variable
        $_SESSION['cart'][0] = $book_array;
    }
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHS General Ed</title>
    <!-- favicon -->
    <link rel="icon" href="favicon (9).ico" />
    <!-- favicon -->

    <!-- css stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/books.css" />
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
                        <a class="nav-link active" href="books.php">Books</a>
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



    <!-- section1 -->
    <section id="section1">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/books/bookheader1.jpeg" alt="...">
                    <div class="carousel-caption mt-2 px-3">
                        <h4 class="text-center">My Ub-E-Store</h4>
                        <h5 class="fw-bolder text-center">Books Section</h5>
                        <p class="fw-normal text-center">List of Books Available</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/books/bookheader2.jpeg" alt="...">
                    <div class="carousel-caption mt-2 px-3 ">
                        <h4 class="text-center">My UB E-Store</h4>
                        <h5 class="fw-bolder text-center">Gen-Ed Books</h5>
                        <p class="fw-normal text-center">Check prices and availability</p>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="images/books/bookheader3.jpeg " alt="...">
                    <h4>Welcome to</h4>
                    <div class="carousel-caption mt-2 px-3">
                        <h4 class="text-center">My Ub-E-Store</h4>
                        <h5 class="fw-bolder text-center">Department Books</h5>
                        <p class="fw-normal text-center">Check prices and availability</p>
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


    <!-- section2 -->
    <section id="section2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-8">

                </div>
            </div>
        </div>

        <div class="container    py-5 my-3">
            <!-- <h4 class="fw-bolder fs-4">Books</h4> -->
            <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="books2.php#section2"><button type="button" class="btn btn-outline-dark w-100">College</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="books-shs2.php#section2"><button type="button" class="btn btn-dark w-100">Senior HighSchool</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="books-jhs2.php#section2"><button type="button" class="btn btn-outline-dark w-100">Junior HighSchool</button></a>
                </li>
            </ul>
            <hr>
            <div id="filter" class="button-group text-end">
                <a href="books-shs.php#section2"><button class="btn " data-filter=".major">All Books</button></a>
                <a href="books-shs2.php#section2"><button class="btn  " data-filter=".major">STEM</button></a>
                <a href="books-shs3.php#section2"><button class="btn  " data-filter=".major">ABM</button></a>
                <a href="books-shs4.php#section2"><button class="btn " data-filter=".major">TechVoc</button></a>
                <a href="books-shs5.php#section2"><button class="btn  border border-2 " data-filter=".major">SHS General Education</button></a>





            </div>
            <div class="row">



                <?php
                $sql = "SELECT * from shsgened ORDER by ID asc";
                $result = mysqli_query($connect, $sql);




                // $result = $database1->getData();
                while ($row = mysqli_fetch_assoc($result)) {



                    component($row['book_name'], $row['book_prize'], $row['book_img'], $row['product_quantity'], $row['id']);
                }







                // $_SESSION['info'] = $row;








                ?>

            </div>
            <div id="filter" class="button-group text-end">
                <a href="books-shs.php#section2"><button class="btn " data-filter=".major">All Books</button></a>
                <a href="books-shs2.php#section2"><button class="btn  " data-filter=".major">STEM</button></a>
                <a href="books-shs3.php#section2"><button class="btn  " data-filter=".major">ABM</button></a>
                <a href="books-shs4.php#section2"><button class="btn " data-filter=".major">TechVoc</button></a>
                <a href="books-shs5.php#section2"><button class="btn border border-2 " data-filter=".major">SHS General Education</button></a>




            </div>




        </div>

    </section>
    <!-- section2 -->


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



    <!-- jquerycdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- owlcarouselcdn script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- isotope -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="js/index.js"></script>
</body>



</html>