<?php
ob_start();
session_start();

require('connect.php');

if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $query = "DELETE FROM products WHERE id=".$id;
        $query2 = "SELECT image_dir FROM products WHERE id=".$id;
        $query3 = "SELECT d_num FROM deleted";
}else{
    echo 'no product like this';
}

$result3 = mysqli_query($conn, $query3);
//for updating the number of products deleted
$row = mysqli_fetch_assoc($result3);
$temp=$row["d_num"];

$temp1=$temp+1;
$upd = "UPDATE deleted SET d_num ='$temp1' WHERE id=1";
//end of updating the deleted product table
$result2 = mysqli_query($conn, $query2);


if (mysqli_num_rows($result2) > 0) {
    
    // output data of each row
    while($row = mysqli_fetch_assoc($result2)) {
        //for deleting the image
        unlink($row['image_dir']);
        //for deleting the product
        $result = mysqli_query($conn, $query);
        if($result){
             mysqli_query($conn, $upd);
            $_SESSION['success_message'] = 'product has been deleted';
                header('Location: admin.php');
                exit();
        }else{
            $_SESSION['error_message'] = 'unable to delete product';
            echo 'cant delete';
        
        }
    }
} else {
    echo "0 results";
}


