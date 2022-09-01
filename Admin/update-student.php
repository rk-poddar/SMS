<?php
//insert photo or files 
if(empty($_FILES['stdphoto']['name'])){
  $file_name = $_POST['oldimg'];
}else{

  $error = array();

  $file_name = $_FILES['stdphoto']['name'];
  $file_size = $_FILES['stdphoto']['size'];
  $file_tmp = $_FILES['stdphoto']['tmp_name'];
  $file_type = $_FILES['stdphoto']['type'];
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
    $stdphoto = move_uploaded_file($file_tmp, "stdphoto/".$file_name);
  }else{
    print_r($error);
    die();
  }

}

?>

<?php

include "../conn.php";
// insert data only

  $tid = $_POST['id'];
  $rollno = $_POST['rollno'];  
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $dob = date('Y-m-d', strtotime($_POST['dob']));
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $class = $_POST['class'];
  $sem = $_POST['sem'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $contactno = $_POST['contactno'];
  $address = $_POST['address'];

    $query = "UPDATE addstudent SET rollno='{$rollno}', name='{$name}',  stdphoto='{$file_name}', gender='{$gender}', dob='{$dob}', email='{$email}', mobile='{$mobile}', sclass='{$class}', sem='{$sem}', fname='{$fname}', mname='{$mname}', contactno='{$contactno}', address='{$address}' WHERE stid='{$tid}'";
    $query_run = mysqli_query($conn, $query);

      if($query_run){
        $message1 = "Data Updated";
          echo "<script> alert('$message1');</script>" ;
      }

      header("location: managestudent.php");

?>