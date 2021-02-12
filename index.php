<?php
ob_start();
session_start();
if(isset($_SESSION['username'])){
  header("Location:admin.php");
   exit();
}
if(isset($_SESSION['views'])) {
$_SESSION['views'] = $_SESSION['views']+1; 
}else{
$_SESSION['views']=1; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>www.scrimpdeli.com</title>
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

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
    
      <a class="navbar-brand js-scroll" href="#page-top"> 
     Scrimpdeli
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
            <a class="nav-link js-scroll active" href="#home"><i class="fa fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about"><i class="fa fa-address-card"></i> About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#categories"><i class="fa fa-shopping-cart"></i> Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work"><i class="fa fa-line-chart"></i> Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact"><i class="fa fa-phone"></i> Contact</a>
          </li>
            <?php
              if(isset($_SESSION['pass'])){
                echo '<li class="nav-item" >
                <a class="nav-link js-scroll" href="cart.php"><i class="ion-android-cart"></i> Cart</a>
              </li>
              <li class="nav-item" >
                <a class="nav-link js-scroll" href="order.php"><i class="ion-android-euro"></i> Order</a>
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
  <div  style="font-family:cursive;">

  <div class="modal fade" id="myModal" style="background-color:rgba(150,50,50,0.1);">
      <div class="modal-dialog modal-lg" style="background-color:beige;">
        <div class="modal-content">
    
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#buyer"> info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#seller"> sign in</a>
                </li>
              </ul></h4>
              <!--end of modal nav tabs-->
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
    
          <!-- Modal body -->
          <div class="modal-body">
                <!-- Tab panes -->
        <div class="tab-content" href="#category">
            <div id="buyer" class="container tab-pane active"><br>
             <h1>Please this only for dedicated sellers .</h1>
            </div>

            <div id="seller" class="container tab-pane fade"><br>
              <form action="val_admin.php" method="POST" class="needs-validation" novalidate>
                <div class="form-group">
                  <label for="uname">Username:</label>
                  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <button type="submit" class="button button-a btn-block button-rouded">Submit</button>
              </form>
            </div>
           
          </div>
        </div>
        <!--end tab panes-->
          
    <!--end of modal bosy-->
          <!-- Modal footer -->
          <div class="modal-footer">
              <button type="button" class="button button-a " data-dismiss="modal">close</button> 
          </div>
    
        </div>
      </div>
    </div>
<!--end of modal-->
<div class="modal fade" id="myModal1" style="background-color:rgba(150,50,50,0.2);">
      <div class="modal-dialog modal-lg" style="background-color:beige;">
        <div class="modal-content">
    
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#b_reg"> Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#b_sign"> sign in</a>
                </li>
              </ul></h4>
              <!--end of modal nav tabs-->
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
    
          <!-- Modal body -->
          <div class="modal-body">
                <!-- Tab panes -->
        <div class="tab-content" href="#category">
            <div id="b_reg" class="container tab-pane active"><br>
             <h1>Register.</h1>
             <br>
             <form action="val_reg.php" method="POST" role="form" enctype="multipart/form-data">
                <div class="form-group">
                  <!-- <label for="uname">Name:</label>-->
                  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="r_name" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                 <!-- <label for="pwd">Password:</label>-->
                  <input type="password" class="form-control"  placeholder="Enter password" name="r_pswd"  pattern="[0-9]{6}" title="must be six(6) numbers" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                 <!-- <label for="pwd">Phone No:</label>-->
                  <input type="tel" class="form-control" id="pwd" placeholder="Enter phone Number" name="r_phone" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
               <!--  <label for="pwd">Email:</label>-->
                  <input type="email" class="form-control" id="pwd" placeholder="Enter your email" name="r_mail" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
               <!--   <label for="pwd">Shipping address:</label>-->
                  <input type="text" class="form-control" id="pwd" placeholder="Enter your Address" name="r_add" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
               <!--   <label for="pwd">State:</label>-->
                  <input type="text" class="form-control" id="pwd" placeholder="Enter your state" name="r_state" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
               <!--   <label for="pwd">City:</label>-->
                  <input type="text" class="form-control" id="pwd" placeholder="Enter City" name="r_city" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
               <!--   <label for="pwd">Country:</label>-->
                  <input type="text" class="form-control" id="pwd" placeholder="Enter Country" name="r_country" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <button type="submit" class="button button-a btn-block button-rouded">Submit</button>
              </form>
            </div>

            <div id="b_sign" class="container tab-pane fade">
            <h1>Sign In.</h1>
            <br>
           
              <form action="val-userin.php" method="POST" class="needs-validation" novalidate>
                <div class="form-group">
                  <label for="uname">Username:</label>
                  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="b_name" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="b_pswd" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <button type="submit" class="button button-a btn-block button-rouded">Submit</button>
              </form>
            </div>
           
          </div>
        </div>
        <!--end tab panes-->
          
    <!--end of modal bosy-->
          <!-- Modal footer -->
          <div class="modal-footer">
              <button type="button" class="button button-a " data-dismiss="modal">close</button> 
          </div>
    
        </div>
      </div>
    </div>
<!--end of modal-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/mavin.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4">Welcome to Scrimpdeli</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Diversity at its peak, Experience Ecommerce in a new dimension </span><strong class="text-slider"></strong></p>
          <h1 class="pt-3"><a class="btn btn-default btn js-scroll px-4" style="background-color:#be613d;color:antiquewhite;" href="#about" role="button"> <i class="fa fa-chevron-circle-down"></i></a></h1>
        <div class="row">
              <div class="col-sm-4">
               </div>
            <div class="col-sm-4">
                    <?php
                    if(isset($_SESSION['log_name'])){
                      echo  '<div class="alert alert-success">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                 <h3><strong>Login Success!!! <i class="ion-android-happy"></i></strong>
                                </h4></div>';
                    }elseif(isset($_SESSION['err_reg'])) {
                      echo  '<div class="alert alert-danger">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Error!!! <i class="ion-sad-outline"></i> </strong> '. $_SESSION['err_reg'].'
                    </div>';
                      
                    }else{
                      
                    }
              ?>
            </div>
            <div class="col-sm-4">
              </div>
        </div>
       
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->
 

  <!--/ Categories section /-->

  <!--/ Section Portfolio Star /-->
  <section id="categories" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Categories
            </h3>
            <p class="subtitle-a">
              choose from our best
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="gadget.php" >
              <div class="work-img">
                <img src="img/work-0.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">ELectonics</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Recent update</span> / <span class="w-date"><?php 
                           require ('connect.php');  
                           $query2_day = "SELECT p_day FROM products where category='laptop Accessories' or category='Phone Accessories' or category='LED/LCD TVs' or category='bluetooth Speaker'";
                           $result2_day = mysqli_query($conn, $query2_day);
                           $row2 = mysqli_fetch_assoc($result2_day);
                            echo $row2["p_day"];
                           ?></span>
                    </div>
                  </div>
                    <div class="w-like">
                  <div class="col-sm-4">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="Wgarb.php" >
              <div class="work-img">
                <img src="img/ladies.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Women's Garb</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Recent update</span> / <span class="w-date"><?php 
                           require ('connect.php');  
                           $query7_day = "SELECT p_day FROM products where category='jeans/joggers' or category='polos/shirt' or category='skirts/shorts' or category='Gown'";
                           $result7_day = mysqli_query($conn, $query7_day);
                           $row7 = mysqli_fetch_assoc($result7_day);
                            echo $row7["p_day"];
                           ?></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="Mgarb.php" >
              <div class="work-img">
                <img src="img/men.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Men's Garb</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Recent update</span> / <span class="w-date"><?php 
                           require ('connect.php');  
                           $query8_day = "SELECT p_day FROM products where category='jean/joggers' or category='plain trousers/chinos' or category='Tshirts/polo' or category='Sweaters'";
                           $result8_day = mysqli_query($conn, $query8_day);
                           $row8 = mysqli_fetch_assoc($result8_day);
                            echo $row8["p_day"];
                           ?></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="allure.php" >
              <div class="work-img">
                <img src="img/allure1.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"> Allure</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Recent update</span> / <span class="w-date"><?php 
                           require ('connect.php');  
                           $query1_day = "SELECT p_day FROM products where category='Fragrance/Deodorant' or category='Earrings/Chains'";
                           $result1_day = mysqli_query($conn, $query1_day);
                           $row1 = mysqli_fetch_assoc($result1_day);
                              echo $row1["p_day"];
                           ?></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="Fwear.php" >
              <div class="work-img">
                <img src="img/footwear.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Foot Wears</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Recent update</span> / <span class="w-date"><?php 
                           require ('connect.php');  
                           $query9_day = "SELECT p_day FROM products where category='slippers/sandals' or category='Brooks' or category='random collection' or category='Cooperate shoes'";
                           $result9_day = mysqli_query($conn, $query9_day);
                           $row9 = mysqli_fetch_assoc($result9_day);
                            echo $row9["p_day"];
                           ?></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-box">
            <a href="african.php">
              <div class="work-img">
                <img src="img/african.jpg" alt="" class="img-fluid"   >
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">* African Attaire *</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Recent Update</span> / <span class="w-date"><?php 
                           require ('connect.php');  
                           $query_day = "SELECT p_day FROM products where category='AFRICAN ATTAIRE'";
                           $result_day = mysqli_query($conn, $query_day);
                           $row = mysqli_fetch_assoc($result_day);
                              echo $row["p_day"];
                           ?></span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div> 
      </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->

  <!--/ Section Testimonials Star /-->
  
  <div class="section-counter paralax-mf bg-image" id="work" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
      <div class="col-sm-3 col-lg-3">
           <div class="counter-box pt-4 pt-md-0">
               <div class="counter-ico">
                    <span class="ico-circle"><i class="ion-android-cart"></i></span>
                      </div>
                      <div class="counter-num">
                      <p class="counter"><?php 
                           require ('connect.php');   
                               $total = "SELECT * FROM products";
                                   $result_t = mysqli_query($conn, $total);
                                   $total_p= mysqli_num_rows($result_t);
                                     echo $total_p;
                        ?>
                       </p>
                          <span class="counter-text">Availabe Products</span>
                       </div>
                      </div>
                     </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-android-calendar"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">1</p>
              <span class="counter-text">Years Of Sale</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-android-people"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">20</p>
              <span class="counter-text">Total Clients</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
           <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                  <span class="ico-circle"><i class="ion-ios-people"></i></span>
                </div>
                <div class="counter-num">
                  <p class="counter"><?PHP   echo " ".$_SESSION['views']; ?></p>
                   <span class="counter-text">Number of Visits</span>
                </div>
               </div>
              </div>
        </div>
     </div>
   </div>

  <!--/ Section Blog Star /-->
    
  <section id="about" class="about-mf sect-pt4 route">
      <center>
          <h3 class="title-a">
              Our Team
              <div class="line-mf"></div>
            </h3>
          </center>
          <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-12 col-md-12">
                     
                        <div class="about-img">
                            <div class="row">
                              <div class="col-sm-4"><img src="img/ava2.jpg" class="img-fluid rounded b-shadow-a" alt=""></div>
                              <div class="col-sm-8"><div class="about-info">
                                  <p><span class="title-s">Name: </span> <span>Iwuno chibike</span></p>
                                  <p><span class="title-s">Profile: </span> <span>Chief Executive Office</span></p>
                                
                                </div></div>
                              </div>
                          </div>
                          <div class="about-img">
                              <div class="row">
                                <div class="col-sm-4"><img src="img/ava2.jpg" class="img-fluid rounded b-shadow-a" alt=""></div>
                                <div class="col-sm-8"><div class="about-info">
                                    <p><span class="title-s">Name: </span> <span>Bassey-Thomas, Edima Udoh</span></p>
                                    <p><span class="title-s">Profile: </span> <span>full stack developer</span></p>
                                  
                                  </div></div>
                                </div>
                            </div>
                          <div class="about-img">
                              <div class="row">
                                <div class="col-sm-4"><img src="img/ava2.jpg" class="img-fluid rounded b-shadow-a" alt=""></div>
                                <div class="col-sm-8"><div class="about-info">
                                    <p><span class="title-s">Name: </span> <span>Sonia </span></p>
                                    <p><span class="title-s">Profile: </span> <span>Human Resource Manager</span></p>
                                
                                  </div></div>
                                </div>
                            </div>
                    
                  </div>
                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About Us
                    </h5>
                  </div>
                  <p class="lead">
                    The stress of selecting desired clothes, accessories, gadget, health care products and so many more in the market without the guarantee of getting your product is really not a thing of joy.

                    
                  </p>
                  <p class="lead">
                    
                      With so much enthusiasm scrimpdeli has dedicated so much  to human services to see that shopping can be done at your convenience.
                  </p>
                  <p class="lead">
                    
                      Scrimpdeli is an E-commerce market where we sell both foreign products and product made in the country to promote our culture.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                     Message Us
                    </h5>
                  </div>
                  <div>
                  <?php
                  require ('connect.php');
                  if(isset($_POST['tname'])||isset($_POST['email'])||isset($_POST['subject'])||isset($_POST['message'])){
                    $name = $_POST['tname'];
                    $email = $_POST['email'];
                    $sub = $_POST['subject'];
                    $mess = $_POST['message'];
                    $time = date("Y:m:d");
                    
                  $sql = "INSERT INTO messages (uname, email, subj, mess, created_at) VALUES ('$name', '$email', '$sub', '$mess', '$time')";

                      if (mysqli_query($conn, $sql)) {
                          echo  '<div class="alert alert-success">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Success!</strong> message has been sent.
                        </div>';
                      } else {
                          echo '<div class="alert alert-danger">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Error!</strong> ' . $sql . "<br>" . mysqli_error($conn)."</div>";
                      }
                    }else{
                      echo '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Waiting for response!</strong> 
                    </div>';
                    }
                   
                      mysqli_close($conn);
                  ?>
                      <form action="" method="post" role="form" class="">
 
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="tname" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  required/>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded"> Send Message </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                     we would love you, our esteemed customers to get in touch with us or follow us our social pages via the icons below. we love your patrotism.
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> No 3 Nwosu Street
                        Awka, Anambra , Nigeria
                        </li>
                      <li><span class="ion-ios-telephone"></span> 09053592307, 09098703770, 08146700555</li>
                      <li><span class="ion-email"></span> scrimpdeli@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https:/Fb.me/Scrimpdeli"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="https://instagram.com/scrimpdeli?r=nametag"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
       
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
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
  
</div>
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
