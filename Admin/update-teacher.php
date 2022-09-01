<?php
//insert photo or files 
if(empty($_FILES['tcphoto']['name'])){
  $file_name = $_POST['oldimg'];
}else{

  $error = array();

  $file_name = $_FILES['tcphoto']['name'];
  $file_size = $_FILES['tcphoto']['size'];
  $file_tmp = $_FILES['tcphoto']['tmp_name'];
  $file_type = $_FILES['tcphoto']['type'];
  $file_ext = explode('.',$file_name);
  $file_extension = end($file_ext);

  $extensions = array("jpeg","jpg","png");

  if(in_array($file_extension, $extensions) == false){
    $error[] = "This file extension is not allowed, Please choose a JPG or PNG file.";
  }

  if($file_size > 2097152){
    $error[] = "File size must be 2Mb or lower.";
  }

  if(empty($error) == true){
    $tcphoto = move_uploaded_file($file_tmp, "tcphoto/".$file_name);
  }else{
    print_r($error);
    die();
  }

}

?>

<?php

include "../conn.php";
// insert data only

$tcid = $_POST['tid'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$dpt = $_POST['dpt'];

    $sql = "UPDATE addteacher SET name='{$name}', gender='{$gender}', tcphoto='{$file_name}', email='{$email}', mobile='{$mobile}', sclass='{$dpt}' WHERE tid='{$tcid}'";
    $query_run = mysqli_query($conn, $sql);

      if($query_run){
        $message1 = "Data Updated";
          echo "<script> alert('$message1');</script>" ;
      }

      header("location: manageteacher.php");

?>


