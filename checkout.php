<?php
session_start();
// require_once("include/allBooksDb.php");
// require_once("include/engiiDb.php");
// require_once("include/nursingDb.php");
// require_once("include/genEdDb.php");
require_once("include/connect.php");

require_once("include/cartcomponent.php");
$_SESSION['orderid'] = uniqid();










// $sql = "SELECT DISTINCT name from users";
// $query = mysqli_query($connect,$sql);
// print_r($query);
// $_SESSION['name'] = $result;

// $sql = "SELECT * FROM users";
// $query = mysqli_query($connect,$sql);
// print_r($query);

// $db1 = new allBooksDb("booksinvent2", "booksinvent2");
if (isset($_POST['remove'])) {
  if ($_GET['action'] == 'remove') {
    # code...
    foreach ($_SESSION['cart'] as $key => $value) {
      if ($value['book_id'] == $_GET['id']) {
        unset($_SESSION['cart'][$key]);
        echo "<script>alert('Product has been remove....')</script>";
        echo "<script>window.location = 'cart.php'</script>";
        # code...
      }
      # code...
    }
  }
}


if (isset($_POST['save'])) {
  $book_id = array_column($_SESSION['cart'], 'book_id');
  $uniform_id = array_column($_SESSION['cart'], 'uniform_id');
  // $name = array_column($_SESSION['cart'], 'book_name');

  $fullname = $_SESSION['name'];
  $contact = $_POST['contact'];
  $street = $_POST['street'];
  $city = $_POST['city'];
  $province = "Batangas";
  $postal = $_POST['postal'];
  $address = $street . ',' . $city . '-' . $province . '/' . $postal;
  $orderid = $_SESSION['orderid'];
  $books = implode(', ', $book_id);
  $uniform = implode(', ', $uniform_id);
  $date = $_POST['date_time'];

  $_SESSION['contact'] = $contact;
  $_SESSION['address'] = $address;
  $_SESSION['data'] = $date;
  $_SESSION['orderid'] = $orderid;




  if (empty($contact)) {
    header("location: checkout.php?error=Dont leave the input fields blank");
    exit();
  } elseif (empty($address)) {
    header("location: checkout.php?error=Dont leave the input fields blank");
    exit();
  } elseif (empty($date)) {
    header("location: checkout.php?error=Dont leave the input fields blank");
    exit();
  } else {
    $sql = "INSERT into delivery_info2 (fullname,orderid,contact,address,books_id,uniform_id,date_time) 
  values('$fullname','$orderid','$contact','$address','$books','$uniform','$date')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
      echo "<script>alert('Information saved!!')</script>";
      echo "<script>window.location = 'payment.php'</script>";
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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>

  <!-- favicon -->
  <link rel="icon" href="favicon (9).ico" />
  <!-- favicon -->

  <!-- css stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/checkout.css" />
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
  <?php
  include("include/header.php");

  ?>
  <div class="container-fluid px-5">
    <div class="row mx-auto">
      <div class="col-lg-7 px-5 py-5 my-3">
        <!-- <div class="cart">
                    <h4 class="fw-bolder fs-4">My Cart</h4>
                    <hr>
                    <?php
                    $total = 0;
                    $total2 = 0;

                    if (isset($_SESSION['cart'])) {
                      $book_id = array_column($_SESSION['cart'], 'book_id');
                      // $name = array_column($_SESSION['cart'], 'book_name');


                      $sql = "SELECT * from booksinvent2";

                      $result = mysqli_query($connect, $sql);

                      while ($row = mysqli_fetch_assoc($result)) {
                        foreach ($book_id as $id) {
                          if ($row['id'] == $id) {
                            cartElement($row['book_img'], $row['book_name'], $row['book_prize'], $row['product_quantity'], $row['id']);
                            $total = $total + (int)$row['book_prize'];
                          }
                        }
                        # code...
                      }




                      # code...

                      # code...


                    } else {
                      echo "<h5>Cart is Empty</h5>";
                    }


                    if (isset($_SESSION['cart'])) {
                      $uniform_id = array_column($_SESSION['cart'], 'uniform_id');
                      $sql = "SELECT * from uniforminvent";
                      $result = mysqli_query($connect, $sql);

                      while ($row = mysqli_fetch_assoc($result)) {
                        foreach ($uniform_id as $id) {
                          if ($row['id'] == $id) {
                            cartElement2($row['uniform_img'], $row['name'], $row['prize'], $row['quantity'], $row['id']);
                            $total = $total + (int)$row['prize'];
                          }
                        }
                        # code...
                      }
                      # code...

                      # code...


                    } else {
                      echo "<h5>Cart is Empty</h5>";
                    }
                    $_SESSION['total'] = $total;







                    ?>
                </div> -->

        <form action="" method="post" class="border rounded-1 py-5 px-3 row g-3  shadow p-3 mb-5 bg-body rounded needs-validation">
          <h4 class="fw-bolder fs-4">Info</h4>
          <p>To place order,Please Fill Up this Form</p>
          <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
              <?= $_GET['error'] ?>
            </div>
          <?php } ?>
          <hr>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Full Name</label>
            <input type="text" class="form-control fw-bold" name="firstname" placeholder="First Name of the Reciever.." value="<?php echo $_SESSION['name'] ?>" disabled readonly>
          </div>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Order Id</label>
            <input type="text" class="form-control fw-bold" name="order" placeholder="First Name of the Reciever.." value="<?php echo $_SESSION['orderid'] ?>" disabled readonly>
          </div>
          <div class="col-md-12">
            <label for="inputCity" class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="contact" placeholder="09XXXXXXXXX">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Street</label>
            <input type="text" class="form-control" name="street" placeholder="Address..">
          </div>

          <div class="col-4">
            <label for="inputAddress" class="form-label">Province</label>
            <input type="text" class="form-control" name="province" placeholder="Province.." value="Batangas" disabled>
          </div>
          <div class="col-4">
            <label class="form-label  text-black">City/Municipality</label>
            <select class="form-select" aria-label="Default select example" name="city">
              <option value=" " selected>-Select-</option>
              <option value="Agoncillio">Agoncillio</option>
              <option value="Alitagtag">Alitagtag</option>
              <option value="Balete">Balete</option>
              <option value="Balayan">Balayan</option>
              <option value="Batangas City">Batangas City</option>
              <option value="Bauan">Bauan</option>
              <option value="Calaca">Calaca</option>
              <option value="Calatagan">Calatagan</option>
              <option value="Sto. Tomas">Sto. Tomas</option>
              <option value="Cuenca">Cuenca</option>
              <option value="Ibaan">Ibaan</option>
              <option value="Laurel">Laurel</option>
              <option value="Lemery">Lemery</option>
              <option value="Lian">Lian</option>
              <option value="Lipa City">Lipa City</option>
              <option value="Lobo">Lobo</option>
              <option value="Malvar">Malvar</option>
              <option value="Mataas na Kahoy">Mataas na Kahoy</option>
              <option value="Nasugbu">Nasugbu</option>
              <option value="Padre Garcia">Padre Garcia</option>
              <option value="Rosario">Rosario</option>
              <option value="San Jose">San Jose</option>
              <option value="San Juan">San Juan</option>
              <option value="San Luis">San Luis</option>
              <option value="San Nicolas">San Nicolas</option>
              <option value="San Pascual">San Pascual</option>
              <option value="Santa Teresita">Santa Teresita</option>
              <option value="Taal">Taal</option>
              <option value="Talisay">Talisay</option>
              <option value="Tanauan">Tanauan</option>
              <option value="Tingloy">Tingloy</option>
              <option value="Taysan">Taysan</option>
              <option value="Tuy">Tuy</option>

            </select>
          </div>
          <div class="col-4">
            <label for="inputAddress" class="form-label">Postal Id</label>
            <input type="text" class="form-control" name="postal" placeholder="Postal Id..">
          </div>
          <div class="col-12">
            <label for="inputBooks" class="form-label">Book Id's</label>
            <input type="text" class="form-control fw-bold text-danger" name="books" placeholder="Books On Cart.." value=" <?php echo implode(', ', $book_id) ?>" disabled readonly>

          </div>
          <div class="col-12">
            <label for="inputUniform" class="form-label">Uniform Id's</label>
            <input type="text" class="form-control fw-bold text-danger" name="uniform" placeholder="Books On Cart.." value=" <?php echo implode(', ', $uniform_id) ?>" disabled readonly>

          </div>
          <div class="col-12">
            <label for="inputDateTime" class="form-label">Date/Time Submitted</label>
            <input type="datetime-local" class="form-control" name="date_time">
          </div>



          <div class="col-12 d-flex ">
            <button type="submit" name="save" class="btn btn-danger w-30">Save and Continue to Checkout</button>
          </div>
        </form>



      </div>

      <div class="col-lg-5 px-5 py-5 my-3">
        <div>
          <h4 class="fw-bolder fs-4">Price Details</h4>
          <hr>
          <form action="cart.php" method="post">
            <div class="row price-details border border-rounded  shadow p-3 mb-5 bg-body rounded h-25 my-3 py-5 px-3">

              <div class="col-md-6">
                <?php

                if (isset($_SESSION['cart'])) {
                  $count = count($_SESSION['cart']);
                  echo "<h6  class=\"fw-bolder fs-6 py-2\">Price ($count items)</h6>";
                  # code...
                } else {
                  echo "<h6 class=\"py-2\">Price (0 items)</h6>";
                }

                ?>
                <h6 class="fw-bolder fs-6 py-2">Delivery Charges</h6>
                <hr>
                <h6 class="fw-bolder fs-6 py-2">Amount Payable</h6>
              </div>
              <div class="col-md-6">

                <h6 class="fw-bolder fs-6 py-2">Php <?php echo  $total ?></h6>
                <h6 class="fw-bolder fs-6 text-success py-2">FREE</h6>
                <hr>
                <h6 class="fw-bolder fs-6 py-2">Php <?php echo  $total ?></h6>




              </div>
              <!-- <button type="submit" class="btn btn-warning py-3 my-3 fw-bolder text-center "><i class="fas fa-money-bill-alt me-2"></i>Check Out</button> -->

            </div>

          </form>
        </div>
      </div>

    </div>

  </div>








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