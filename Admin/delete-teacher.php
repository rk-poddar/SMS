<?php

include "../conn.php";

$id = $_GET['id'];

$sql1 = "SELECT * FROM addteacher WHERE tid={$id}";
$result1 =  mysqli_query($conn, $sql1) or die("Query Error");
$row = mysqli_fetch_assoc($result1);

// echo "<pre>";
// print_r($row);
// echo "</pre>";
// die();

unlink("tcphoto/".$row['tcphoto']);

$sql = "DELETE FROM addteacher WHERE tid={$id}";
$result = mysqli_query($conn, $sql) or die("Query Error");

header("location: manageteacher.php");

mysqli_close('$conn');

?>