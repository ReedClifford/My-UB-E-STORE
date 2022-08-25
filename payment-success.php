<?php
session_start();
require_once("include/connect.php");

unset($_SESSION['cart']);


require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');

if (isset($_POST['submit'])) {
  $user_on_session = $_SESSION['uid'];
  $user_on_session .= '@ub.edu.ph';
  $mailTo = $user_on_session;

  //   $firstname = $_POST['firstname'];
  //   $lastname = $_POST['lastname'];
  $subject = 'Thanks For Shopping With Us';
  $body = 'Hi,' . $_SESSION['name'] . ',<br><br>' . 'Thankyou for your purchased on My-UB-E-Store!!<br><br>We recieved your order #'.$_SESSION['orderid'].' On ' . $_SESSION['data'] . '<br>and paid a total of Php'
    . $_SESSION['total'] . ' via online payment<br><br>We are getting your order ready ,
  <br>Please expect a phone call or text message of your orders arival in 1-3 days.
  <br>We wish you enjoy shopping with us and hope to see you again real soon';


  $mail = new PHPMailer\PHPMailer\PHPMailer();
  // $mail->SMTPDebug = 3;
  $mail->isSMTP();

  $mail->Host = 'mail.smtp2go.com';
  $mail->SMTPAuth = true;

  $mail->Username = 'ub.edu.ph';
  $mail->Password = 'test123';

  $mail->SMTPSecure = 'tls';
  $mail->Port = '2525';


  $mail->From = 'admin@ub.edu.ph';
  $mail->FromName = 'University Bookstore Admin';

  $mail->addAddress($mailTo, "User");
  $mail->isHTML(true);
  //   $mail->setFrom($firstname,$lastname);
  $mail->Subject = ($subject);
  $mail->Body = $body;
  $mail->AltBody = "This is the plain email version of the content";

  if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
    echo "<script>window.location = 'landing-page.php'</script>";
  }
  # code...
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Successful</title>
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

    <img src="images/success2.png" alt="" class="rounded-circle my-5 mx-auto">

    <div class="card-body">
      <h5 class="card-title">Payment Successful</h5>
      <p class="card-text">Your Transaction has been Processed Succesfully</p>

      <form action="" method="post">
        <input type="submit" name="submit" class="btn btn-success" value="Back to Shopping Page">
      </form>
      <!-- <a href="landing-page.php" class="btn btn-success">Back To Shopping Page </a> -->
    </div>
  </div>

</body>

</html>