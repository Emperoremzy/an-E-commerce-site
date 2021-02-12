<?php
ob_start();
session_start();
require ('connect.php');
require ('modal_call.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>scrimpdeli</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/scrimpdeli.png" rel="icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style-orange.css" rel="stylesheet">
  <script>
      // Disable form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Get the forms we want to add validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="page-top" style="font-family:cursive;">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="index.php">Scrimpdeli
      </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">   
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index.php"><i class="fa fa-home"></i> back to Home</a>
          </li>
          <?php
              if(isset($_SESSION['log_name'])){
                echo '<li class="nav-item" >
                <a class="nav-link js-scroll" href="cart.php"><i class="ion-android-cart"></i> Cart</a>
              </li>
              <li class="nav-item" >
              <a class="nav-link js-scroll" href="order.php"><i class="ion-android-globe"></i> Order</a>
            </li>
              <li class="nav-item" >
                <a class="nav-link js-scroll" href="logout_user.php"><i class="ion-log-out"></i> Log Out</a>
              </li>';
              }else{
                echo ' <li class="nav-item"  data-toggle="modal" data-target="#myModal1">
                <a class="nav-link js-scroll" href="#"><i class="ion-android-cart"></i> Buy</a>
              </li>
              <li class="nav-item"  data-toggle="modal" data-target="#myModal">
              <a class="nav-link js-scroll" href="#"><i class="ion-log-in"></i> Sell</a>
            </li>';
              }
            ?>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div  class="intro route bg-image" style="background-image: url(img/mavin.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4" style="font-family:cursive;">Your Orders</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Diversity at its peak, Experience Ecommerce in a new dimension </span><strong class="text-slider"></strong></p>
          <h1 class="pt-3"><a class="btn btn-default btn js-scroll px-4" style="background-color:#be613d;color:antiquewhite;" href="#about" role="button"><i class="fa fa-chevron-circle-down"></i></a></h1> 
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->
 <div class="conatiner">
 <br>
  <h3 class="intro-title mb-4" style= "text-align:center;">ORDERED PRODUCTS</h3>
  </div>
  <!--/ Categories section star/-->
  
  <div class="container">
        <BR>
  <div class="row">
      <?php 
                   $sql = 'SELECT * FROM reg_user WHERE pass='.$_SESSION['pass'];
                  $result = mysqli_query($conn, $sql);
                  $row5 = mysqli_fetch_assoc($result);
                  $reg_id = $row5['reg_id'];

                  $sql1 = "SELECT * FROM order_table WHERE reg_id=".$reg_id;
                  $result1 = mysqli_query($conn, $sql1);
                  $req1 = mysqli_query($conn, $sql1);
                  $row6 = mysqli_fetch_assoc($result1);
                  $reg_id6 = $row6['reg_id'];

                  $sql2 = "SELECT * FROM cart_table WHERE reg_id=".$reg_id6;
                  $result2 = mysqli_query($conn, $sql2);
                  $req2 = mysqli_query($conn, $sql2);
             ?>
    <div class="col-md-4">
    <div class="jumbotron" style="background-color:grey;color:white; box-shadow: 10px 13px 8px -10px rgba(212, 151, 37);">
        <?php
          echo '<h3 style="color:white;">Order Details:</h3>';
          echo '<p>'.$row5['r_Name'].'<br>'.$row5['phone'].'<br>'.$row5['email'].'<br>'.$row5['s_add'].', '.$row5['s_city'].'</p>';
        ?>
        <h3 style="color:white;">  Account Details:</h3>
              <p>Bank: UBA</p>
              <p>Acct No: 2137534386</p>
              <p>Acct Name: iwuno Samuel</p>
              <h4 style="color:white;"><i class="ion-android-alert" style='color:red;'> important:</i> please pay in all deposits for the required goods with the given product number <h4>
       </div> 
    </div>

              <?php
              if (mysqli_num_rows($result1) > 0) {
              
                // output data of each row
               while($row1 = mysqli_fetch_assoc($req1)){
            
                    require ('order_call.php');
                
                }  
            } else {
                echo "No products Ordered Yet!!!";
            }
             
             ?>
             
            </div>
          </div> 
    

  <!--/ Categories section end/-->

  <!--/ Section Contact-Footer Star /-->
 <br><br>
    <footer style="background-color: #be613d;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
