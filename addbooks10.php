<?php
session_start();
include "include/connect.php";






if (isset($_POST['add'])) {
    $bookid = $_POST['id'];
    $bookname = $_POST['book_name'];
    $bookprize = $_POST['book_prize'];
    $bookimg = $_FILES['book_img'];
    $bookqty = $_POST['product_quantity'];

    $bookimgfilename4 = $bookimg['name'];
    $bookimgerror = $bookimg['error'];
    $bookimgfiletemp = $bookimg['tmp_name'];

    $filename_seperate = explode('.', $bookimgfilename4);


    $file_extension = strtolower(end($filename_seperate));


    $extensions = array('jpg', 'jpeg', 'png');
    if (in_array($file_extension, $extensions)) {

        $uploadBookImg = 'images/' . $bookimgfilename4;
        move_uploaded_file($bookimgfiletemp, $uploadBookImg);

        $sql = "INSERT into teched (id,book_name,book_prize,book_img,product_quantity) 
        values('$bookid','$bookname','$bookprize','$uploadBookImg','$bookqty')";
        $sql2 = "INSERT into booksinvent2 (id,book_name,book_prize,book_img,product_quantity) 
        values('$bookid','$bookname','$bookprize','$uploadBookImg','$bookqty')";
        $result = mysqli_query($connect, $sql);
        $result2 = mysqli_query($connect, $sql2);
        if ($result && $result2) {
            // echo "data inserted succesfully";
            header("location:admin-dashboard10.php#section2");
            # code...
        } else {
            # code...
            die(mysqli_error($connect));
        }
    }
}







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Books</title>
    <link rel="icon" href="favicon (9).ico" />
    <!-- favicon -->

    <!-- css stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/addbooks.css" />
    <style>
        .navbar {
            font-family: 'Open Sans', sans-serif;

        }

        .navlink {
            text-decoration: none;
            cursor: pointer;
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
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top   py-3 px-2  ">
        <div class="container-fluid">

            <a href=""><img src="images/UBlogo.png" alt="" width="120" height="40" class="d-inline-block align-text-top" />
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
                        <p class="fw-normal text-center">to the inventory</p>

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
                <div class="col col-lg-2 col-md-12 col-sm-12 col-xs-12">
                    <nav class="nav flex-column border border-1 mt-5 nav-pills navbar-light bg-light  ">
                        <div class="bg-dark border  py-2 px-3">
                            <h4 class="fs-4 fw-bold text-white-50"><i class="fas fa-user-shield fa-sm"></i> Administrator</h4>
                        </div>
                        <div class="bg-dark border  py-2 px-3">
                            <a href="admin-dashboard.php#section2" class="navlink">
                                <h6 class="fs-6 fw-normal text-white-50 text-wrap"><i class="fas fa-book-open"></i> Books Inventory</h6>
                            </a>
                        </div>


                        <a class="nav-link  bg-secondary text-white border" href="admin-dashboard.php">Manage Books</a>
                        <a class="nav-link  border bg-dark text-white-50" href="deliverydetails.php#section2"><i class="fas fa-truck me-2"></i>Deliveries</a>
                        <a class="nav-link  border disabled " href="#">Uniform</a>
                        <a class="nav-link border disabled" href="#">Merch</a>

                    </nav>
                </div>
                <div class="col col-lg-10 col-md-12 col-sm-12 col-xs-12 ">




                    <h5 class="fw-bolder bg-dark text-white-50 py-3 px-3 fs-4 mt-5">Add TechEd Books</h5>
                    <hr>
                    <form method="post" class="border border-2 py-4 px-4 my-2 mx-2 shadow p-3 mb-5 bg-body rounded" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Book Id</label>
                            <input type="number" class="form-control" name="id" placeholder="Enter Book Name">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Book Name</label>
                            <input type="text" class="form-control" name="book_name" placeholder="Enter Book Name">

                        </div>
                        <div class="mb-3">
                            <label for="book_prize" class="form-label">Book Price</label>
                            <input type="text" class="form-control" name="book_prize" placeholder="Enter Book Price">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Book Image</label>
                            <input class="form-control" type="file" name="book_img">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="text" class="form-control" name="product_quantity" placeholder="Enter Quantity">

                        </div>
                        <button type="submit" name="add" class="btn btn-dark">AddBook</button>
                    </form>






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