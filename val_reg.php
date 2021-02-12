<?php
require('connect.php');
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>www. scrimpdeli.com</title>
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

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="page-top">

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
      
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div  class="intro route bg-image" style="background-image: url(img/work-1.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4"><?php 
            if(isset($_POST['r_name'])||isset($_POST['r_pswd'])||isset($_POST['r_phone'])||isset($_POST['r_mail'])||isset($_POST['r_add'])||isset($_POST['r_state'])||isset($_POST['r_city'])||isset($_POST['r_country'])){
              $name = $_POST['r_name'];
                  $pass =$_POST['r_pswd'];
                    $phone = $_POST['r_phone'];
                        $mail = $_POST['r_mail'];
                            $add = $_POST['r_add'];
                                 $state = $_POST['r_state'];
                                     $city = $_POST['r_city'];
                                         $country = $_POST['r_country'];
                                            $reg_id = mt_rand();

                    $sql1 = "SELECT * FROM reg_user  WHERE email='$mail'";
                    $check= mysqli_query($conn, $sql1);
                    if(mysqli_num_rows($check) == 0){
                      $sql =  "INSERT INTO reg_user (r_Name, pass, phone, email, s_add, s_state, s_city, s_country, reg_id)
                      VALUES ('$name', '$pass', '$phone', '$mail', '$add', '$state', '$city', '$country', '$reg_id')";
                        if (mysqli_query($conn, $sql)) {
                          $_SESSION['log_name'] = $name;
                          $_SESSION['reg_id'] = $reg_id;
                          $_SESSION['pass'] = $pass;
                          header('location:index.php');
                          exit();
                            } else {
                                $_SESSION['err_reg'] =  mysqli_error($conn);
                                header('location:index.php');
                                exit();
                            }
                    
                     
                    }else{
                        $_SESSION['err_reg'] = 'You have already been registered with this email!!!';
                         header('location:index.php');
                        exit();
                    }
            }else{
                $_SESSION['err_reg'] = "UNABLE TO REGISTER YOU!!!!!!!!!";
                 header('location:index.php');
                 exit();
          }
          ?></h1>
          </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->
 

  <!--/ Categories section star/-->

        
        <br>
     
        <!-- section for navTab panes -->
       
                
  <!--/ Categories section end/-->
 

  <!--/ Section Contact-Footer Star /-->
 
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
