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
             <form action="val_reg.php" method="POST" class="needs-validation" novalidate>
                <div class="form-group">
                  <!-- <label for="uname">Name:</label>-->
                  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="r_name" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                 <!-- <label for="pwd">Password:</label>-->
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="r_pswd" required>
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
