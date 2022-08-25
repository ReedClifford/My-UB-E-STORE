<?php
include 'include/connect.php';
session_start();









?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- FAVICON -->
    <link rel="icon" href="favicon (9).ico" />

    <!-- STYLESHEETS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/login.css">
    <style>
        .formheader {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>


    <!-- FONTAWESOME CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- BOOTSTRAP JSCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

    <section>
        <div class="container">


            <form class="needs-validation mx-3" action="php-scripts/login-script.php" method="POST">
                <div class="formheader">
                    <h2>LOGIN </h2>
                    <a href="index.php"><button type="button" class="btn-close" aria-label="Close"></button></a>


                </div>


                <!-- ERROR ALLERT -->
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_GET['error'] ?>
                    </div>
                <?php } ?>



                <div class="inputcontainer">
                    <div class="inputs-box">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="uid" name="uid" placeholder="Uid">
                            <div class="invalid-feedback">
                                Please Enter the User-Id
                            </div>

                            <label for="floatingInput">User ID..</label>




                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                            <div class="invalid-feedback">
                                Please Enter the Password
                            </div>

                            <label for="floatingPassword">Password..</label>

                        </div>



                    </div>
                    <select class="form-select mx-auto w-75 my-3" name="usertype" aria-label="Default select example">
                        <option selected value="student">Student</option>
                        <option value="admin">Admin</option>


                    </select>

                    <div class="center">
                        <button class="btn-login" type="submit" name="login" id="login">Login</button>
                    </div>

                </div>




            </form>
        </div>

    </section>



</body>

</html>