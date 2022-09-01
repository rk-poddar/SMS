<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#8a2be2">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/teacher-notice.css">
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">    
    <title>Teacher Notice</title>
</head>
<body>
   
    <?php
include "topbar.php";
    ?>
    <!-- notices -->
<section id="notices">
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
<td><a href="../Admin/notice/<?php echo $row['anotice']; ?>"><i class="las la-download"></i></a></td>
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

</body>
</html>