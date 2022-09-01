<?php

include "../conn.php";

$id = $_GET['id'];

$sql1 = "SELECT * FROM addstudent WHERE stid={$id}";
$result1 =  mysqli_query($conn, $sql1) or die("Query Error");
$row = mysqli_fetch_assoc($result1);

// echo "<pre>";
// print_r($row);
// echo "</pre>";
// die();

unlink("stdphoto/".$row['stdphoto']);


$sql = "DELETE FROM addstudent WHERE stid={$id}";
$result = mysqli_query($conn, $sql) or die("Query Error");

header("location: managestudent.php");

mysqli_close('$conn');

?>

