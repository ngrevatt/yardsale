﻿<!DOCTYPE html>
<html lang="en">
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
                <li  class='active'><a href="about.php">About</a></li>
                <?php
                  if(isset($_COOKIE["logged_in"])) {
                    echo "<li><a href='search.php'>View Listings</a></li>";
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

    <div class="container marketing" style = "padding-top:60px">

      <!-- START THE FEATURETTES -->

      
<div>
      <div class="row featurette">
        <div class="col-md-7">

          <h2 class="featurette-heading">About Us: </span></h2>
          <ul>
            <li style="font-size:16px;margin-top:12px;margin-bottom:12px">Yardsale is a trusted community marketplace for people to list and rent what would otherwise be unused spaces. </li>
            <li style="font-size:16px;margin-top:12px;margin-bottom:12px">From driveways for parking to yards for a tailgate, Yardsale enables existing space to be optimally utilized by the community. </li>
            <li style="font-size:16px;margin-top:12px;margin-bottom:12px">Unlike our competitiors, we operate primarily on college campuses, where parking is limited and expensive.</li>
            <li style="font-size:16px;margin-top:12px;margin-bottom:12px">With world-class customer service and a growing community of users, Yardsale is the easiest way for people to monetize their extra space.</li>
            <li style="font-size:16px;margin-top:12px;margin-bottom:12px">Our slogan is "Do you prefer to use meters or yards?" This is representing how instead of going through the pain of finding metered parking, you could just use YardSale.</li>
          </ul>
<!--           <p class="lead">Yardsale is a trusted community marketplace for people to list and rent what would otherwise be unused spaces. </p>
          <p class="lead">From driveways for parking to yards for a tailgate, Yardsale enables existing space to be optimally utilized by the community. </p>
          <p class="lead">Most of our competitors only serve cities, but we are trying to focus more on college campuses, where street parking is very limited and in high demand.</p>
          <p class="lead">With world-class customer service and a growing community of users, Yardsale is the easiest way for people to monetize their extra space.</p>
          <p class="lead">Our slogan is "Do you prefer to use meters or yards?" This is representing how instead of going through the pain of finding metered parking, you could just use YardSale.</p>
          <p class="lead">At the University of Virginia, people are forced to find parking off-campus during home football games. This leads to people’s cars getting towed and a lot of pain and hassle, and can be completely avoided with yardsale.</p> -->
        </div>
        
        <div class="col-md-3 middlealign" height ="100%">
          
          
          <img src="./images/driveway.jpg" alt="Generic placeholder image" height=180% width=180% style="padding-top:40px">
        
        </div>
      </div>
    </div>
      <hr class="featurette-divider">

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
