<?php

include "../conn.php";
session_start();

//if login then always show home page not redirect on login page
if(isset($_SESSION["username"])){
  header("location:admin-home.php");
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Admin Login</title>

    <!-- Cascading Style Sheet -->
    <link rel="stylesheet" href="styles/admin-login.css" type="text/css" />

    <!-- Line Awesome -->
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
  </head>

  <body>
    <div class="login_section">
      <div class="logo">
        <img src="images/white_logo.svg" alt="" /><br />
        <p class="stu">STUDENT</p>
        <p class="manag">MANAGEMENT</p>
        <p class="sys">SYSTEM</p>
      </div>

      <div class="loginpannel">
        <h1 class="welcome">Welcome!</h1>
        <h1 class="sign">Sign in to your account</h1>

        <form action="#" method="POST">
          <i class="las la-user i1"></i>
          <input
            type="text"
            name="username"
            id="username"
            placeholder="Username"
            required
          /><br />

          <i class="las la-key i2"></i>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password"
            required
          />
          <input type="submit" value="SIGN IN" name="signin"/>
        </form>

<?php

if(isset($_POST['signin'])){
  
  $username = $_POST['username'];  
  $password = $_POST['password'];  

  $sql = "select *from admin where username = '$username' and password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
      if($count > 0){
        
        while($row = mysqli_fetch_assoc($result)){
          session_start();
          
          //validate user for session
          $_SESSION["username"] = $row['username'];
          $message1 = "Login Successful";
          echo "<script> alert('$message1');</script>" ;
          header("location: admin-home.php");
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
