<?php

include "../conn.php";

$id = $_GET['id'];

$sql = "DELETE FROM addsubject WHERE subid={$id}";
$result = mysqli_query($conn, $sql) or die("Query Error");

header("location: managesubject.php");

mysqli_close('$conn');

?>