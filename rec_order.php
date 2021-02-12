  <?php  
  ob_start();
    session_start();
    require('connect.php');
  
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $query = "UPDATE order_table SET prod_stat='PAID' where id=".$id;

        if(mysqli_query($conn,$query)){
                header('location:admin.php');
        }else{
                echo 'unable to update this transaction';
        }
    }
?>