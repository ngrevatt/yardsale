
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
                <li><a href="about.php">About</a></li>
                <?php
                  if(!isset($_COOKIE["logged_in"])) {
                    echo "<li class='active'><a href='signup.php'>Sign Up</a></li>";
                  }
                ?>
                
                <?php
                  if(!isset($_COOKIE["logged_in"])) {
                    echo "<li><a href='login.php'>Sign in</a></li>";
                  }
                ?>
                

                <?php
                  if(isset($_COOKIE["logged_in"])) {
                    echo "<li><a href='logout.php'>Sign out</a></li>";
                  }
                ?>
                <li><a href="about.html">About</a></li>
                <li class="active"><a href="signup.html">Sign Up</a></li>

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
require __DIR__  . '/PHPMailer/PHPMailerAutoload.php';
use \PayPal\Api\Amount;
use \PayPal\Api\Details;
use \PayPal\Api\FundingInstrument;
use \PayPal\Api\Item;
use \PayPal\Api\ItemList;
use \PayPal\Api\Payer;
use \PayPal\Api\Payment;
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

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$city = $_POST['city'];
$zip_code = $_POST['zip_code'];
$address = $_POST['address'];
$state = $_POST['state'];
$month = $_POST['month'];
$year= $_POST['year'];
$credit_card = $_POST['credit_card'];
$cvv = $_POST['cvv'];
$password = $_POST['password'];


$sql = "INSERT INTO users (FirstName, LastName, Email, State, City, ZipCode, Address, CreditNumber, CreditMonth, CreditYear, CVV, Password ) VALUES 
('$first_name', '$last_name', '$email', '$state', '$city', '$zip_code', '$address', '$credit_card', '$month', '$year', '$cvv', '$password' );";



$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "yardsaleuva@gmail.com";
$mail->Password = "doyouprefermetersoryards?";
$mail->setFrom('yardsaleuva@gmail.com', 'Nathaniel Grevatt');
$mail->addReplyTo('yardsaleuva@gmail.com', 'Nathaniel Grevatt');
$mail->addAddress($email, $first_name);
$mail->Subject = 'Welcome to Yardsale';
$mail->Body = 'Congrats on signing up with Yardsale!';

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
	
	
} else {
    echo "Message sent!<br>";
	//header("Location: http://www.yahoo.com/");
}
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$card = new PaymentCard();
$card->setType("visa")
    ->setNumber($credit_card)
    ->setExpireMonth($month)
    ->setExpireYear($year)
    ->setCvv2($cvv)
    ->setFirstName($first_name)
    ->setBillingCountry("US")
    ->setLastName($last_name);

	$amount = new Amount();
$amount->setCurrency("USD")
		->setTotal(20);
$transaction = new Transaction();
$transaction->setAmount($amount);

$fi = new FundingInstrument();
$fi->setPaymentCard($card);
$payer = new Payer();
$payer->setPaymentMethod("paypal");
  //  ->setFundingInstruments(array($fi));
$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl("http://localhost/yardsale/checkout.php")
    ->setCancelUrl("http://localhost/yardsale/signup.html");
$payment = new Payment();
$payment->setIntent("sale")
    ->setPayer($payer)
	->setRedirectUrls($redirectUrls)
    ->setTransactions(array($transaction));

	
$request = clone $payment;
try {
    $payment->create($apiContext);
	$jfo = json_decode($payment);
	$jsonlinks = $jfo->links;
	$approvalurl = ($jsonlinks[1])->href;
	
	header("Location: $approvalurl");
	die();
	
	
} catch (PayPal\Exception\PayPalConnectionException $ex) {
    echo $ex->getCode(); // Prints the Error Code
    echo $ex->getData(); // Prints the detailed error message 
    die($ex);
} catch (Exception $ex) {
    die($ex);
}




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

