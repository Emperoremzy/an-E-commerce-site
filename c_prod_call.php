<?php
  echo '<br><div class="col-md-4 col-sm-12">
                  <div class="container">
                    <div class="card bg-light">
                      <img class="card-img-top" src="'.$row["img_dir"].'" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title" style="color:grey;text-align:center;">'.$row["descr"].'</h4>
                        <h6 class="card-text" style="color:grey;text-align:center;"><i class="ion-android-alert"> product No:</i> '.$row["prod_id"].'<br><i class="ion-android-call"></i> 
                        '.$row["tel"].'<br><i class="ion-android-calendar"></i>   '.$row["c_day"].'</h6>';
                        
                        if(isset($_SESSION['log_name'])){
                        echo'  <form action = "proc_order.php?id='.$row['prod_id'].'" method="POST">
                        <button class="btn btn-block"><h6> &#8358 '.$row["price"].'<h6></button><br>
                        <input type="number" name="qty" placeholder="quantity" class="form-control" required><br>
                          <input type="submit" name="submit" value="Place Order" class="btn btn-success btn-block">
                          </form>
                          <br>
                          <form action = "del_cart.php?id='.$row['prod_id'].'" method="POST">
                          <input type="submit" name="submit" value="Remove from cart" class="btn btn-danger btn-block">
                          </form>';
                        }else{
                       echo'<br> <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal1">log in</button>';
                        }
                       echo' </div>
                    </div>  
                  </div>
                </div>';
  ?> 
  