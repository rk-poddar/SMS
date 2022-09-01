<?php

include "../conn.php";
//insert data only
if(isset($_POST['updatesub'])){
  
  $subid = $_POST['subid'];
  $subname = $_POST['subname'];
  $subcode = $_POST['subcode'];
  $subclass = $_POST['subclass'];
  $sem = $_POST['sem'];
  $assignteacher = $_POST['assignteacher'];

    $query = "UPDATE addsubject SET subname='{$subname}', subcode='{$subcode}', subclass='{$subclass}', sem='{$sem}', assignteacher='{$assignteacher}' WHERE subid='{$subid}'";
    $query_run = mysqli_query($conn, $query);

    header('location: managesubject.php');

    mysqli_close($conn);

}

?>