<?php
ob_start();
session_start();

require('connect.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $query = "DELETE FROM messages WHERE id=".$id;
    $result = mysqli_query($conn, $query);
        if($result){
            $_SESSION['del_succ'] = 'message has been deleted';
                header('Location: admin.php');
                exit();
        }else{
            $_SESSION['error_message'] = 'unable to delete message';
            header('Location: admin.php');
                exit();
        
        }
    }
 ?>