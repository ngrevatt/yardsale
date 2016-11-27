
<!DOCTYPE html>

<html lang="en">
<?php
  if (isset($_GET['login'])) {
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "yardsale";
	$email = $_POST['email'];
	$sql="SELECT * FROM users WHERE email='$email'";
	$result=mysql_query($sql);
	$password = $_POST['password'];

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1){
    $row = mysql_fetch_assoc($result);
    if ($password == $row['password']){
        session_start(); 
        $_SESSION['user'] = $email;
        header( 'Location: localhost/yardsale/' ) ;
        echo "Login Successful";
        return true;
    }
    else {
        echo "Wrong Username or Password";
        return false;
    }
}
else{
    echo "Wrong Username or Password";
    return false;
}

$conn = new mysqli($servername, $username, $password, $dbname);

  }

?>
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
              <a class="navbar-brand" href="index.html">YardSale</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
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
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    	<h3 class="panel-title" style="text-align:center">Login to YardSale</h3>
			 </div>
			 <div class="panel-body">

			    	<form action = "login.php?login=true" method="POST" role="form" id="registration-form">


			    	<div class="form-group">
			    		<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address"
                                            data-validation="required email" data-validation-error-msg="Not a valid email">
			    	</div>
			<div class="form-group">
			    		<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password"
                                             data-validation="required custom" data-validation-regexp="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
			    	</div>		
			<input type="submit" value="Log In" class="btn btn-info btn-block">
			    		
	      	</form>
	</div>
</div>
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
