<?php
session_start();
// require_once("include/allBooksDb.php");
// require_once("include/engiiDb.php");
// require_once("include/nursingDb.php");
// require_once("include/genEdDb.php");
require_once("include/connect.php");

require_once("include/cartcomponent.php");

// $db1 = new allBooksDb("booksinvent2", "booksinvent2");
if (isset($_POST['remove'])) {
  if ($_GET['action'] == 'remove') {
    # code...
    foreach ($_SESSION['cart'] as $key => $value) {
      if ($value['book_id'] == $_GET['id']) {
        unset($_SESSION['cart'][$key]);
        echo "<script>alert('Product has been remove....')</script>";
        echo "<script>window.location = 'payment.php'</script>";
        # code...
      }
      # code...
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
  <title>Payment</title>
  <!-- favicon -->
  <link rel="icon" href="favicon (9).ico" />
  <!-- favicon -->



  <!-- stylesheet -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/checkout.css" />
  <!-- stylesheet -->







  <!-- paypal sdk -->
  <script src="https://www.paypal.com/sdk/js?client-id=AefG2a3_HOM-HgkzoIibTUNtRjNS8-VYCDBWqr_lNGj1pDsu1VDpT04CPlloTnF-l346sAbAmOGZ11q7"></script>
  <!-- paypal sdk -->
</head>

<body>
  <?php
  include("include/header.php");


  ?>

  <div class="container-fluid px-5">
    <div class="row mx-auto">
      <div class="col-lg-7 px-5 py-5 my-3">
        <div class="cart ">
          <h4 class="fw-bolder fs-4">My Cart</h4>
          <hr>
          <?php
          $total = 0;
          $total2 = 0;

          if (isset($_SESSION['cart'])) {
            $book_id = array_column($_SESSION['cart'], 'book_id');
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







          ?>
        </div>



      </div>

      <div class="col-lg-5 px-5 py-5 my-3">
        <div>
          <h4 class="fw-bolder fs-4">Checkout Details</h4>
          <hr>
          <form action="#" method="post">
            <div class="row price-details border border-rounded  shadow p-3 mb-5 bg-body rounded bg-white h-25 my-3 py-5 px-3">

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

              <div id="paypal-button-container">
                
              </div>



              <!-- paypal API script        -->
              <script>
                paypal.Buttons({
                  createOrder: function(data, actions) {
                    // Set up the transaction

                    return actions.order.create({
                      purchase_units: [{
                        amount: {
                          value: '20'
                        }
                      }]
                    });
                  },
                  onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                      alert("Transaction Completed")
                      window.location.href = "payment-success.php"
                    })
                  },
                  onCancel: function(data){
                    window.location.href = "payment-cancel.php"

                  }
                }).render('#paypal-button-container');
              </script>



            </div>

          </form>
        </div>
      </div>

    </div>

  </div>



  <!-- footer -->
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

</body>

</html>