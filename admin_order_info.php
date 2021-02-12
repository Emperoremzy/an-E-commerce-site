<?php
 $sql1 = "SELECT * FROM reg_user WHERE reg_id=".$row4['reg_id'];
 $check= mysqli_query($conn, $sql1);
 if(mysqli_num_rows($check) == 1){
  $row10= mysqli_fetch_assoc($check);
 }
  else{

  }

echo '<div id="dataModal'.$d++.'" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Modal Header</h4>
    </div>
    <div class="modal-body">
      ';
   echo '<p>'.$row10['r_Name'].'<br>'.$row10['phone'].'<br>'.$row10['email'].'<br>'.$row10['s_add'].', '.$row10['s_city'].'</p>';
   echo' </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>

</div>
</div>';

?>