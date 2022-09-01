<?php

include "../conn.php";
session_start();

//if login then always show home page not redirect on login page
if(isset($_SESSION["username"])){
  header("location:student-home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Student Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" href="styles/student-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Student Login</span></div>
        <form action="" method="POST">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Login" name="login">
          </div>
        </form>


        <?php

if(isset($_POST['login'])){
   
  $username = $_POST['username'];  
  $password = md5($_POST['password']);   

  $sql = "select *from addstudent where username = '$username' and password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
      if($count > 0){
        
        while($row = mysqli_fetch_assoc($result)){
          session_start();
          
          //validate user for session
          $_SESSION["username"] = $row['username'];
          $_SESSION["name"] = $row['name'];
          $message1 = "Login Successful";
          echo "<script> alert('$message1');</script>" ;
          header("location: student-home.php");
        }
          
      }
      else{  
         $message2 = "Login Failed";
          echo "<script> alert('$message2');</script>" ;  
        }

}

?>


      </div>
    </div>

  </body>
</html>
