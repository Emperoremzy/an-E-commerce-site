<?php
ob_start();
session_start();
                                          require('connect.php');


                                          $target_dir = "uploads/";
                                          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                          $uploadOk = 1;
                                          $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                                          // Check if image file is a actual image or fake image
                                          if(isset($_POST['pname'])||isset($_POST['price'])||isset($_POST['tel'])||isset($_POST['p_category'])||isset($_POST['message'])||isset($_POST["submit"])){
                                            $name=$_POST['pname'];
                                            $price=$_POST['price'];
                                            $tel= $_POST['tel'];
                                            $cate= $_POST['p_category'];
                                            $mess=$_POST['message'];
                                            $time = date("Y:m:d");
                                              $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                              if($check !== false) {
                                                  //echo "File is an image - " . $check["mime"] . ".";
                                                  $uploadOk = 1;
                                              } else {
                                                $_SESSION['err_upload']= "File is not an image.";
                                                  $uploadOk = 0;
                                                  header('location:admin.php');
                                                  exit();
                                              }
                                          }
                                          // Check if file already exists
                                          if (file_exists($target_file)) {
                                            $_SESSION['err_upload']= "Sorry, file already exists.";
                                              $uploadOk = 0;
                                              header('location:admin.php');
                                              exit();
                                          }
                                          // Check file size
                                          if ($_FILES["fileToUpload"]["size"] > 5000000) {
                                            $_SESSION['err_upload']= 'Sorry, your file is too large; please your image cannot be larger than 5mb.';
                                              $uploadOk = 0;
                                              header('location:admin.php');
                                              exit();
                                          }
                                          // Allow certain file formats
                                          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                          && $imageFileType != "gif" ) {
                                            $_SESSION['err_upload']= 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
                                              $uploadOk = 0;
                                              header('location:admin.php');
                                              exit();
                                          }
                                          // Check if $uploadOk is set to 0 by an error
                                          if ($uploadOk == 0) {
                                            $_SESSION['err_upload']= 'Sorry, your file was not uploaded.';
                                            header('location:admin.php');
                                            exit();
                                          // if everything is ok, try to upload file
                                          } else {
                                              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                                $sql = "INSERT INTO products (pname,price,image_dir,tel,category,descr, p_day) VALUES ('$name','$price','$target_file','$tel','$cate','$mess', '$time')";

                                                              if (mysqli_query($conn, $sql)) {
                                                                  echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been <h2>uploaded.<h2>";
                                                                  $_SESSION['succ_upload']= 'uploaded';
                                                                  header('location:admin.php');
                                                                  exit();
                                                              } else {
                                                                $_SESSION['err_upload']= 'unable uploaded';
                                                                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                                                  header('location:admin.php');
                                                                  exit();
                                                              }

                                                
                                              } else {
                                                  echo "Sorry, there was an error uploading your file.";
                                              }
                                          }

                                          ?>