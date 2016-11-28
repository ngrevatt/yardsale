
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>YardSale</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->

    <link href="carousel.css" rel="stylesheet">

    <style>
    body {
      padding-top: 60px;
    }
    </style>

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">YardSale</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li class="active"><a href="signup.html">Sign Up</a></li>
                <li><a href="login.php">Sign in</a></li>

                <p class="navbar-text" style="font-style:italic">“Do you prefer to use meters or yards?”</p>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <center>
   <h3>
        		<?php
require __DIR__  . '/Paypal-PHP-SDK/autoload.php';

use \PayPal\Api\Amount;
use \PayPal\Api\Details;
use \PayPal\Api\FundingInstrument;
use \PayPal\Api\Item;
use \PayPal\Api\ItemList;
use \PayPal\Api\Payer;
use \PayPal\Api\Payment;
use \PayPal\Api\PaymentExecution;
use \PayPal\Api\PaymentCard;
use \PayPal\Api\Transaction;
use \PayPal\Api\RedirectUrls;
// After Step 1
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AdVu9DGZFhBp7uHf8HaaeVLVdArG37H98358BNNXNbjalB7lMcdvEmrJcpDtSOf4qdnp5Cnod6syifCZ',     // ClientID
        'EJwyhEZCT9Kt1bU6M83jrWdVqb-wo_OsXb3Z5Y2nraVwuPmIWtkp8Oys2YWXjSXcK07hPIrh0sPY9E-v'      // ClientSecret
    )
);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yardsale";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sdkConfig = array(
	"mode" => "sandbox"
);

$apiContext->setConfig($sdkConfig);
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$paymentId = $_GET['paymentId'];
$payment = Payment::get($paymentId, $apiContext);
$execution = new PaymentExecution();
$execution->setPayerId($_GET["PayerID"]);
$amount = new Amount();
$transaction = new Transaction();
$amount->setCurrency('USD');
 $amount->setTotal(20);
 $transaction->setAmount($amount);
 $execution->addTransaction($transaction);
$payment->execute($execution, $apiContext);

echo "Congrats you successfully paid and signed up!";
setcookie('logged_in', true, time() + 3600, '/');



$conn->close();
?>
</h3>
<h4><a href="index.html">Click here to go back to the homepage</a></h4>
<br><br><br><br><br><br><br><br><br></center>
</div>
</div>


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>

        <p>&copy; 2016 YardSale &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>

      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>

    <!--jQuery Form Validator-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet" type="text/css" />
     
    <script type="text/javascript"> 
        $.validate({
            onSuccess: function(){
                $("#registration-form").submit(function(){alert("Submitted");});
            } 
        })
    </script>

  </body>

</html>

