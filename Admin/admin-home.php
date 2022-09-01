<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles/admin-home.css" />
    
    <!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
  </head>
  <body>
<?php

include "sidebar.php";
?>
<!-- main-content -->
  
<div class="main-content">
  <header>
    <h1><i class="las la-desktop"></i> Dashboard</h1>
  </header>

  <main>

  <?php

$sql = "SELECT * FROM addstudent ";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful");
$num = mysqli_num_rows($result);

$sql1 = "SELECT * FROM addteacher ";
$result1 = mysqli_query($conn, $sql1) or die("Query unsuccessful");
$num1 = mysqli_num_rows($result1);

$sql2 = "SELECT * FROM addclass ";
$result2 = mysqli_query($conn, $sql2) or die("Query unsuccessful");
$num2 = mysqli_num_rows($result2);

$sql3 = "SELECT subname FROM addsubject ";
$result3 = mysqli_query($conn, $sql3) or die("Query unsuccessful");
$num3 = mysqli_num_rows($result3);
 
?>


    <div class="cards">

    <a href="managestudent.php" style="text-decoration:none";>
      <div class="single-card">
        <div>
          <h1><?php echo $num; ?></h1>
          <span>Students</span>
        </div>
        <div>
          <span class="las la-users"></span>
        </div>
      </div>
    </a>

    <a href="manageteacher.php" style="text-decoration:none";>
      <div class="single-card">
        <div>
          <h1><?php echo $num1; ?></h1>
          <span>Teachers</span>
        </div>
        <div>
          <span class="las la-user-tie"></span>
        </div>
      </div>
    </a>

    <a href="managesubject.php" style="text-decoration:none";>
      <div class="single-card">
        <div>
          <h1><?php echo $num3; ?></h1>
          <span>Subjects</span>
        </div>
        <div>
          <span class="las la-chalkboard-teacher"></span>
        </div>
      </div>
    </a>

    <a href="manageclass.php" style="text-decoration:none";>
      <div class="single-card">
        <div>
          <h1><?php echo $num2; ?></h1>
          <span>Courses</span>
        </div>
        <div>
          <span class="las la-award"></span>
        </div>
      </div>
    </a>
   </div>

<!-- notices -->

<div class="notice-header">
  <h2><i class="las la-bell"></i> Notices</h2>
</div>

  <?php 

      $sql = "SELECT ntitle, anotice, Date(ctime) as ctime FROM notice";
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
<td><?php echo $row['ctime']; ?></td>
<td><?php echo $row['ntitle']; ?></td>
<td><a href="notice/<?php echo $row['anotice']; ?>"><i class="las la-download"></i></a></td>
  </tr>
  <?php } ?>
  
</tbody>

  </table>
</div>
<?php }else{
          echo "<h2><center>No Record Found</center></h2>";
          }

?>


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
<td><a href="timetable/<?php echo $row['timetable']; ?>"><i class="las la-download"></i></a></td>
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

</main>
</div>


      
    <!-- js code -->
 
    <script>
      let toggle_btn = document.querySelector("#toggle-btn");
      let sidebar = document.querySelector(".sidebar");

      toggle_btn.onclick = function () {
        sidebar.classList.toggle("active");
      };
      



    </script>
  </body>
</html>
