<?php

include "../conn.php";

$id = $_GET['id'];

$sql = "DELETE FROM addclass WHERE classid={$id}";
$result = mysqli_query($conn, $sql) or die("Query Error");

header("location: manageclass.php");

mysqli_close('$conn');

?>