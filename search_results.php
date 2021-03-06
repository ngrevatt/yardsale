<!DOCTYPE html>
<html lang="en">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yardsale";
$city = $_POST['city'];
$state = $_POST['state'];
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Yardsale</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <style>
    .middlealign {
       display: inline-block;
    vertical-align: middle;
    float: none;
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
                  if(isset($_COOKIE["logged_in"])) {
                    echo "<li class='active'><a href='search.php'>View Listings</a></li>";
                  }
                ?>
                <?php
                  if(isset($_COOKIE["logged_in"])) {
                    echo "<li><a href='list.php'>Post a Listing</a></li>";
                  }
                ?>
                <?php
                  if(!isset($_COOKIE["logged_in"])) {
                    echo "<li><a href='signup.php'>Sign Up</a></li>";
                  }
                ?>
                
                <?php
                  if(!isset($_COOKIE["logged_in"])) {
                    echo "<li><a href='login.php'>Sign in</a></li>";
                  }
                ?>
                <?php
                  if(isset($_COOKIE["logged_in"])) {
                    echo "<li><a href='mylistings.php'>Your Listings</a></li>";
                  }
                ?>
                <?php
                  if(isset($_COOKIE["logged_in"])) {
                    echo "<li><a href='logout.php'>Sign out</a></li>";
                  }
                ?>

                <p class="navbar-text" style="font-style:italic">“Do you prefer to use meters or yards?”</p>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


   
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <?php
    echo "<h2 class='text-center' style='padding-top:65px'>", 'Listings in ', $city, ', ', $state, "</h2>";
    ?>
    <div class="container" style="padding-top:25px">
      <table class="table">
  <thead>
    <tr>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Address</th>
      <th>Description</th>
      <th>Month</th>
      <th>Day</th>
      <th>Year</th>
    </tr>
  </thead>
  <tbody>
       <?php
  session_start();
  $sql="SELECT * FROM listings WHERE city='$city' AND state='$state' AND year = '$year' AND month = '$month' AND day = '$day'";
  $conn = new mysqli($servername, $username, $password, $dbname);
  $result=$conn->query($sql);
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>", $row['Email'], "</td>";
    echo "<td>", $row['Phone'], "</td>";
    echo "<td>", $row['Address'], "</td>";
    echo "<td>", $row['Description'], "</td>";
    echo "<td>", $row['Month'], "</td>";
    echo "<td>", $row['Day'], "</td>";
    echo "<td>", $row['Year'], "</td>";
  }
  
?>
  </tbody>
</table>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Yardsale &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./assets/js/vendor/jquery.min.js"></script></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
