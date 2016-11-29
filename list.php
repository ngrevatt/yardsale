
﻿
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

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->

    <link href="carousel.css" rel="stylesheet">

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
                <li ><a href="about.php">About</a></li>
                <?php
                  if(isset($_COOKIE["logged_in"])) {
                    echo "<li><a href='search.php'>View Listings</a></li>";
                  }
                ?>
                <?php
                  if(isset($_COOKIE["logged_in"])) {
                    echo "<li class = 'active'><a href='list.php'>Post a Listing</a></li>";
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
?>                
                <p class="navbar-text" style="font-style:italic">“Do you prefer to use meters or yards?”</p>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

     <div class="container" style="padding-top: 45px;">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
            <h3 class="panel-title" style="text-align:center">Post a Listing</h3>
       </div>
       <div class="panel-body">

            <form action = "post.php" method="POST" role="form" id="registration-form">
          Contact Information:
            
            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address"
                                            data-validation="required email" data-validation-error-msg="Not a valid email">
            </div>

            <div class="form-group">
              <input type="phone" name="phone" id="phone" class="form-control input-sm" placeholder="Phone number"
                                             data-validation="required custom" data-validation-regexp="^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$">
            </div>
          Rental Space info:
            <div class="form-group">
              <input type="address" name="address" id="address" class="form-control input-sm" placeholder="Address"
                                            data-validation="required custom" data-validation-regexp="^[a-zA-Z0-9\s,'-]*$">
                                            
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="city" name="city" id="city" class="form-control input-sm" placeholder="City"
                                                            data-validation="required custom" data-validation-regexp="^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$">
                </div>
              </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <select class="form-control" id="state" name="state">
                <option value="VA">Virginia</option>
                <option value="AK">Alaska</option>
                <option value="AL">Alabama</option>
                <option value="AR">Arkansas</option>
                <option value="AZ">Arizona</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DC">District of Columbia</option>
                <option value="DE">Delaware</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="IA">Iowa</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="MA">Massachusetts</option>
                <option value="MD">Maryland</option>
                <option value="ME">Maine</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MO">Missouri</option>
                <option value="MS">Mississippi</option>
                <option value="MT">Montana</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="NE">Nebraska</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NV">Nevada</option>
                <option value="NY">New York</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="PR">Puerto Rico</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="WA">Washington</option>
                <option value="WI">Wisconsin</option>
                <option value="WV">West Virginia</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
          </div>
            </div>

        <div class="form-group">
              <input type="zip code" name="zip code" id="zip code" class="form-control input-sm" placeholder="Zip code"
                                             data-validation="required custom" data-validation-regexp="^\d{5}(?:[-\s]\d{4})?$">
            </div>

        <div class="form-group">
              <input type="descripton" name="description" id="description" class="form-control input-sm" placeholder="Description"
                                             data-validation="required custom" data-validation-regexp="">
            </div> 

        Date Listed For:

        <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                      <select class="form-control" id="month" name="month">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                
              </select>
                  </div>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                      <select class="form-control" id="day" name="day">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">10</option>
                <option value="14">11</option>
                <option value="15">12</option>
                <option value="16">10</option>
                <option value="17">11</option>
                <option value="18">12</option>
                <option value="19">10</option>
                <option value="20">11</option>
                <option value="21">12</option>
                <option value="22">11</option>
                <option value="23">12</option>
                <option value="24">11</option>
                <option value="25">12</option>
                <option value="26">11</option>
                <option value="27">12</option>
                <option value="28">11</option>
                <option value="29">12</option>
                <option value="30">11</option>
                <option value="31">12</option>
              </select>
                  </div>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <select class="form-control" id="year" name="year">
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
                <option value="2032">2032</option>
                <option value="2033">2033</option>
                
              </select>
                </div>
                                                      </div>
            </div>
      <input type="submit" value="Post" class="btn btn-info btn-block">
              
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
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script></script>
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