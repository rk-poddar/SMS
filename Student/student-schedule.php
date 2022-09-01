<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#8a2be2">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/student-schedule.css">
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">    
    <title>Student Schedule</title>
</head>
<body>
   <?php
include "sidenav.php";
   ?>
<section>
<div class="notice-header">
  <h2><i class="las la-calendar-week"></i> Time Table</h2>
  </div>
  <?php 

$sql = "SELECT timetable, Date(ctimetable) as ctimetable FROM timetable";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful");
if(mysqli_num_rows($result) > 0){

?>
<div class="notices">
<table>
<tbody>
<?php 
  $id = 0; //for id increament
    while($row = mysqli_fetch_assoc($result)){
    $id = $id + 1; //for id increament
?>

<tr>
<td><?php echo $row['ctimetable']; ?></td>
<td><?php echo $row['timetable']; ?></td>
<td><a href="../Admin/timetable/<?php echo $row['timetable']; ?>"><i class="las la-download"></i></a></td>
</tr>
<?php } ?>

</tbody>

</table>
</div>
<?php }else{
    echo "<h2><center>No Record Found</center></h2>";
    }
mysqli_close($conn);
?>


</section>

  <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>
</html>