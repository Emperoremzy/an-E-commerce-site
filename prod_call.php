
  <?php
  echo '<br><div class="col-md-4 col-sm-12">
                  <div class="container">
                    <div class="card bg-light">
                      <img class="card-img-top" src="'.$row["image_dir"].'" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title" style="color:grey;text-align:center;">'.$row["pname"].'</h4>
                        <h6 class="card-text" style="color:grey;text-align:center;"> '.$row["descr"].'<br> <i class="ion-android-call"></i>  '.$row["tel"].'</h6>
                        <button class="btn btn-block"> &#8358 '.$row["price"].'</button>';
                        if(isset($_SESSION['log_name'])){
                        echo'<br>  <form action = "add_cart.php?id='.$row['id'].'" method="POST">
                        '.$row['id'].'
                          <input type="submit" name="submit" value="add to Cart" class="btn btn-success btn-block">
                          </form>';
                        }else{
                       echo'<br> <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal1">log in</button>';
                        }
                       echo' </div>
                    </div>  
                  </div>
                </div>';
  ?>