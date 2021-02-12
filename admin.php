<?php  
  ob_start();
  session_start(); 
     if(!isset($_SESSION['username'])){
        header("Location:index.php");
        exit();
     }else{
       
     }    
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
            <a class="nav-link js-scroll " id="category"  href="#categories"><i class="ion-ios-pulse-strong"></i>  Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll"  href="logout.php"><i class="ion-log-out"></i>  log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div  class="intro route bg-image" style="background-image: url(img/work-5.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4">Dashboard</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Diversity at its peak, Experience Ecommerce in a new dimension </span><strong class="text-slider"></strong></p>
          <h1 class="pt-3"><a class="btn btn-default btn js-scroll px-4" style="background-color:#be613d;color:antiquewhite;" href="#about" role="button"><i class="fa fa-chevron-circle-down"></i></a></h1> 
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->
 

  <!--/ Categories section star/-->

        
        <br>
     
        <!-- section for navTab panes -->
        <section id="about" class="about-mf sect-pt4 route">
            <div class="container">
                <h3>
            <ul class="nav nav-tabs" role="tablist">
                
                    <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#sell"><i class="ion-cash"></i> Sell</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#stat"> <i class="ion-stats-bars"></i> Statistics</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#order"> <i class="ion-android-globe"></i> Orders </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#del"> <i class="ion-trash-b"></i> Delete </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#mess"> <i class="ion-chatbox"></i> Client Messages </a>
                    </li>
              </ul>
              </h3>
                 <div class="box-shadow-full">
                     <div class="tab-content">
                        <div id="sell" class="container tab-pane active"><br>
                                <h1>Selling platform .</h1>
                                <?php
                                             if(isset($_SESSION['succ_upload'])){
                                               echo  '<div class="alert alert-success">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>Success!</strong> products has been uploaded for sale
                                                </div>';
                                                 }elseif (isset($_SESSION['err_upload'])) {
                                                 echo  '<div class="alert alert-danger">
                                                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                 <strong>Error!</strong> '.$_SESSION['err_upload'].'
                                                  </div>';
                                                  }
                                ?>
                                <form action="verify_upload.php" method="post" enctype="multipart/form-data">
                      
                                <br>
                                    <input type="text" class="form-control" id="uname" placeholder="Enter Product Name" name="pname" required><br>
                                    <input type="text" class="form-control" id="uname" placeholder="Enter Product Price" name="price" required><br>
                                    <input type="file"  name="fileToUpload"  class="form-control" id="fileToUpload"><br>
                                    <input type="tel" class="form-control" id="uname" placeholder="Enter Phone number" name="tel" required><br>
                                              
                                          <div class="select form-group" id="coursesDiv" name="p_category" required>
                                            <select class="form-control" name="p_category" required>
                                                <option value="" disabled selected>Pick a category</option>
                                                <option disabled>Electronics</option>
                                                <option>laptop Accessories</option> <option>Phone Accessories</option>
                                                <option>bluetooth Speaker</option><option>LED/LCD TVs</option>
                                                <option>Hometheatres</option><option>Dvd players</option>
                                                <option disabled> Allure </option>
                                                <option>Hair cream</option><option>Belts</option>
                                                <option>Wigs/Hairs</option><option>Fragrance/Deodorant</option>
                                                <option>Watches/bracelets</option><option>Earrings/Chains</option>
                                                <option disabled> Footwears</option>
                                                <option>slippers/sandals</option><option>Brooks</option>
                                                <option>random collection</option><option>Cooperate shoes</option>
                                                <option disabled>Men's Garb</option>
                                                <option>jean/joggers</option><option> plain trousers/chinos</option>
                                                <option>Tshirts/polo</option><option>Sweaters</option>
                                                <option>Suits</option><option>Shorts</option>
                                                <option disabled>Ladies Garb</option>
                                                <option>jeans/joggers</option><option>polos/shirt</option>
                                                <option>plain trousers</option><option>skirts/shorts</option>
                                                <option>Gown</option><option>random collections</option>
                                                <option>AFRICAN ATTAIRE</option>
                                            </select>
                              
                                        </div>

                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"  placeholder="Product description (not more than 20words)"></textarea>
                                    <br>
                                    <button type="submit"  class="button button-a btn-block" name="submit">SELL</button>
                                </form>
                        </div>
                        <div id="mess" class="container tab-pane fade"><br>
                                <h1>Messages.</h1>
                                <?php
                                require('connect.php');
                                $sql = "SELECT id, uname, email, subj, mess, created_at FROM messages";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                
                                    echo ' <li class="list-group-item "  style="background-color:#be613d;color:antiquewhite;"> <span class="badge">NAME: </span>'.$row['uname'].'</li>
                                    <li class="list-group-item " style="background-color:#be613d;opacity:0.8;color:antiquewhite;"><span class="badge">SUBJECT: </span>'.$row['subj'].'</li>
                                    <li class="list-group-item "style="background-color:#be613d;opacity:0.6;color:antiquewhite;"><span class="badge">EMAIl: </span>'.$row['email'].'</li>
                                    <li class="list-group-item list-group-item-default"><span class="badge">MESSSAGE: </span><p style="font-style:monospace;">'.$row['mess'].'</p> <ul class="pager">
                                    <li>'.$row['created_at'].' <form action = "del_mess.php?id='.$row['id'].'" method="POST">
                                    <input type="submit" name="submit" value="delete" class="btn btn-danger btn-block">
                                    </form></li>
                                    
                                  </ul></li>
                                    <br>
                                 
                            ';
                                  }
                              } else {
                                  echo "No Messages Yet!!!";
                              }
                                ?>
                                
                                
                        </div>
                        <div id="del" class="container tab-pane fade"><br>
                                <h1>Delete Products .</h1>
                                <br> 
                                <div class="row">
                                
                                <?php
                                require ('connect.php');  
                                
                              $sql = "SELECT  id, pname, price, image_dir, tel, category, descr FROM products";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                
                                    echo '<div class="col-md-4 col-sm-12">
                                    <div class="container">
                                      <div class="card bg-light">
                                        <img class="card-img-top" src="'.$row["image_dir"].'" alt="Card image" style="width:100%">
                                        <div class="card-body">
                                          <h4 class="card-title" style="color:grey;">'.$row["pname"].'</h4>
                                          <p class="card-text">'.$row["descr"].'<br><i class="ion-android-call"></i> '.$row["tel"].'</p>
                                          <a href="#" class="btn btn-warning btn-block"> &#8358 '.$row["price"].'</a>
                                          <br>
                                          <form action = "delete.php?id='.$row['id'].'" method="POST">
                                          <input type="submit" name="submit" value="delete" class="btn btn-danger btn-block">
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>';
                                  }
                              } else {
                                  echo "No products Uploaded Yet!!!";
                              }
                              ?>
                            </div> 
                        </div>
                        <div id="order" class="container tab-pane fade"><br>
                                <h1>Customer orders .</h1>
                                <br> 
                                <div class="row">
                                
                                <?php
                                require ('connect.php');  
                                
                              $sql_ord = "SELECT * FROM order_table";
                                $res_o = mysqli_query($conn, $sql_ord);
                                
                                if (mysqli_num_rows($res_o) > 0) {
                                  // output data of each row
                                  $x=1;
                                  $d=1;
                                  while($row4 = mysqli_fetch_assoc($res_o)) {
                                    $sql1 = "SELECT * FROM reg_user WHERE reg_id=".$row4['reg_id'];
                                    $check= mysqli_query($conn, $sql1);
                                    if(mysqli_num_rows($check) == 1){
                                    $row10= mysqli_fetch_assoc($check);
                                    }
                                    else{
                                  
                                    }
                                  require('admin_order_call.php');
                                  
                                   
                                 
                                      
                                  }
                              } else {
                                  echo "No products Uploaded Yet!!!";
                              }
                              ?>
                             
                            </div> 
                        </div>
                        <div id="stat" class="tab-pane fade">
                        <div class="section-counter paralax-mf bg-image" id="work" style="background-image: url(img/counters-bg.jpg)">
                                <div class="overlay-mf"></div>
                                <div class="container-fluid">
                                <div class="row">
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
                                        <span class="ico-circle"><i class="ion-chatboxes"></i></span>
                                        </div>
                                        <div class="counter-num">
                                        <p class="counter"><?php 
                                         require ('connect.php');   
                                         $query_m = "SELECT * FROM messages";
                                           $result_m = mysqli_query($conn, $query_m);
                                          $total_m= mysqli_num_rows($result_m);
                                           echo $total_m;
                                        ?></p>
                                        <span class="counter-text">message recieved</span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-3 col-lg-3">
                                    <div class="counter-box pt-4 pt-md-0">
                                        <div class="counter-ico">
                                        <span class="ico-circle"><i class="ion-trash-a"></i></span>
                                        </div>
                                        <div class="counter-num">
                                        <p class="counter"><?php 
                                         require ('connect.php');   
                                         $query_p = "SELECT d_num FROM deleted";
                                         $result_d = mysqli_query($conn, $query_p);
                                         $row = mysqli_fetch_assoc($result_d);
                                          echo $row['d_num'];
                                        ?></p>
                                        <span class="counter-text">Removed Products</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                       
                     </div>
                 </div>
            </div>
                </section>

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
