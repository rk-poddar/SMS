<?php

include "../conn.php";
//insert data only
if(isset($_POST['upclass'])){
  
  $cid = $_POST['classid'];
  $classname = $_POST['classname'];

    $query = "UPDATE addclass SET classname='{$classname}' WHERE classid='{$cid}'";
    $query_run = mysqli_query($conn, $query);

    header('location: manageclass.php');

    mysqli_close($conn);

}

?>