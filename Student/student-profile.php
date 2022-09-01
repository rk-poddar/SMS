<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="theme-color" content="#8a2be2" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/student-profile.css" />
    <!-- line awesome link -->
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
    <title>Student Profile</title>
  </head>
  <body>
    <?php
include "sidenav.php";
    ?>
    
    <?php 

$username = $_SESSION["username"];

    $sql = "SELECT * FROM addstudent JOIN addclass WHERE addstudent.sclass = addclass.classid AND username='{$username}' ";
    $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){

  ?>

    <section class="profile-detail">
      <div class="profile-card">
        <div class="image-container">
          <img src="../Admin/stdphoto/<?php echo $row['stdphoto']; ?>" />
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
              <td>Roll NO. :</td>
              <td><?php echo $row['rollno']; ?></td>
            </tr>
            <tr>
              <td>Branch :</td>
              <td><?php echo $row['classname']; ?></td>
            </tr>
            <tr>
              <td>Semester :</td>
              <td><?php echo $row['sem']; ?></td>
            </tr>
            <tr>
              <td>DOB :</td>
              <td><?php echo $row['dob']; ?></td>
            </tr>
            <tr>
              <td>Mobile :</td>
              <td><?php echo $row['mobile']; ?></td>
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
