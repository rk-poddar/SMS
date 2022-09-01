<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="theme-color" content="#8a2be2" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/teacher-profile.css" />
    <!-- line awesome link -->
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
    <title>Teacher Profile</title>
  </head>
  <body>
    <?php
include "topbar.php";
    ?>

  <?php 

$username = $_SESSION["username"];

    $sql = "SELECT * FROM addteacher JOIN addclass WHERE addteacher.sclass = addclass.classid AND username='{$username}' ";
    $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){

  ?>

    <section class="profile-detail">
      <div class="profile-card">
        <div class="image-container">
          <img src="../Admin/tcphoto/<?php echo $row['tcphoto']; ?>" />
        </div>

        <table class="profile-table">
          <tbody>
            <tr>
              <td>Name :</td>
              <td><?php echo $row['name']; ?></td>
            </tr>
            <tr>
              <td>Email :</td>
              <td><?php echo $row['email']; ?></td>
            </tr>
            <tr>
              <td>Gender :</td>
              <td><?php echo $row['gender']; ?></td>
            </tr>
            <tr>
              <td>Mobile :</td>
              <td><?php echo $row['mobile']; ?></td>
            </tr>
            <tr>
              <td>Department :</td>
              <td><?php echo $row['classname']; ?></td>
            </tr>
          </tbody>
        </table>

      </div>
      
    </section>

    <?php }else{
              echo "<h2><center>No Record Found</center>
</h2>";
          }
          mysqli_close($conn);

          ?>

    <script>
      var hamburger = document.querySelector(".hamburger");
      hamburger.addEventListener("click", function () {
        document.querySelector("body").classList.toggle("active");
      });
    </script>
  </body>
</html>
