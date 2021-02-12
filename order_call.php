<?php
  echo '<br><div class="col-md-4">
                  <div class="container">
                    <div class="card bg-light">
                      <img class="card-img-top" src="'.$row1["img_dir"].'" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title" style="color:grey;text-align:center;">'.$row1["descr"].'</h4>
                        <h6 class="card-text" style="color:grey;text-align:center;"><i class="ion-android-alert"> product No:</i> '.$row1["prod_id"].'<br><i class="ion-android-call"></i> 
                        '.$row1["tel"].'<br><i class="ion-android-calendar"></i>   '.$row1["o_day"].'</h6>';
                        
                        if(isset($_SESSION['log_name'])){
                          if($row1['prod_stat'] == 'UNPAID'){
                            echo'
                            <button class="btn btn-block"><h6> &#8358 '.$row1["price"].' for '.$row1['qty'].' pieces<h6></button><br>
                              <input type="submit" name="submit" value="Awaiting deposit" class="btn btn-success btn-block">
                              <br>
                              <form action = "del_order.php?id='.$row1['id'].'" method="POST">
                              <input type="submit" name="submit" value="Cancel Order" class="btn btn-danger btn-block">
                              </form>';
                          }else{
                            echo '<input type="submit" name="submit" value="In Transit" class="btn btn-info btn-block">';
                          }
                        }else{
                          
                       echo'<br> <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal1">log in</button>';
                        }
                       echo' </div>
                    </div>  
                  </div>
                </div>';
  ?> 