<?php

include "../conn.php";
session_start();

//if user not login the always show login page 
if(!isset($_SESSION["username"])){
  header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="theme-color" content="#8a2be2" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/sidenav.css" />
    <!-- line awesome link -->
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
  </head>
  <body>

  <?php 

$username = $_SESSION["username"];

    $sql = "SELECT * FROM addstudent JOIN addclass WHERE addstudent.sclass = addclass.classid AND username='{$username}' ";
    $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){

  ?>

<div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                        <i class="las la-bars"></i>
          
                </div>
            </div>
             
        </div>
        <div class="sidebar">
            <div class="profile">
                <img src="../Admin/stdphoto/<?php echo $row['stdphoto']; ?>" />
                <h3>Hi, <?php echo $row['name']; ?></h3>
            </div>
            <ul>
                <li>
                    <a href="student-home.php">
                        <span class="icon"><i class="las la-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="student-profile.php">
                        <span class="icon"><i class="las la-user-circle"></i></span>
                        <span class="item">Profile</span>
                    </a>
                </li>
    
                <li>
                    <a href="student-notice.php">
                        <span class="icon"><i class="las la-bell"></i></span>
                        <span class="item">Notices</span>
                    </a>
                </li>
                <li>
                    <a href="student-schedule.php">
                        <span class="icon"><i class="las la-calendar-alt"></i></span>
                        <span class="item">Schedule</span>
                    </a>
                </li>
                <li>
                    <a href="student-change-password.php">
                        <span class="icon"><i class="las la-user-lock"></i></span>
                        <span class="item">Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="las la-door-open"></i></span>
                        <span class="item">Log out</span>
                    </a>
                </li>
    
            </ul>
        </div>
        </div>

        <?php }else{
              echo "<h2><center>No Record Found</center>
</h2>";
          }

          ?>

    </body>
</html>
