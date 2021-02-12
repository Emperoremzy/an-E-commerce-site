<?php

  echo '<br><div class="col-md-4">
                  <div class="container">
                    <div class="card bg-light">
                      <img class="card-img-top" src="'.$row4["img_dir"].'" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title" style="color:grey;text-align:center;">'.$row10['r_Name'].'</h4>
                        <h6 class="card-text" style="color:grey;text-align:center;"><i class="ion-android-alert"> product No:</i> '.$row4["prod_id"].'<br><i class="ion-android-call"></i> 
                        '.$row4["tel"].'<br><i class="ion-android-calendar"></i>   '.$row4["o_day"];
                        echo '<br>'.$row10['s_add'].','.$row10['s_city'].', '.$row10['s_state'].'</h6>';
                        
                          if($row4['prod_stat'] == 'UNPAID'){
                            echo'
                            <button class="btn btn-block"><h6> &#8358 '.$row4["price"].' for '.$row4['qty'].' pieces<h6></button><br>
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#dataModal'.$x++.'"><h6 style="color:white"> Buyers Details<h6></button>
                              <br>
                              <form action = "rec_order.php?id='.$row4['id'].'" method="POST">
                              <input type="submit" name="submit" value="Recieved Payment" class="btn btn-success btn-block">
                              </form>
                              ';
                          }else{

                            echo '<input type="submit" name="submit" value="In Transit" class="btn btn-info btn-block">
                            <br>
                              <form action = "del_admin_order.php?id='.$row4['prod_id'].'" method="POST">
                              <input type="submit" name="submit" value="Delivered" class="btn btn-danger btn-block">
                              </form>';
                          }
                       
                       echo' </div>
                    </div>  
                  </div>
                  </div>
                
                ';
  ?> 