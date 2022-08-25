<?php 
session_start();
require_once("include/connect.php");

// unset($_SESSION['cart']);


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Canceled</title>
    <!-- favicon -->
    <link rel="icon" href="favicon (9).ico" />
    <!-- favicon -->


    <!-- stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        div {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            flex-direction: column;
        }

        img {
            padding: 0%;
        }
    </style>
</head>

<body>
    <!-- <div class="container border border-3 my-5">
        
        <h3>Payment Successfull!!!</h3>
        <h4>Your Transaction has been Processed Succesfully</h4>
    </div> -->
    <div class="card border-2 text-center my-5 py-5 px-5 mx-5">
        
            <img src="images/cancel.png" alt="" class="rounded-circle my-5 mx-auto">
   
        <div class="card-body">
            <h5 class="card-title">Payment Canceled</h5>
            <p class="card-text">Payment Canceled for some Reason</p>
            <a href="payment.php" class="btn btn-danger">Back To Shopping Page</a>
        </div>
    </div>

</body>

</html>