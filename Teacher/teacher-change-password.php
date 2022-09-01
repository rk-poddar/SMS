<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#8a2be2">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/teacher-change-password.css">
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">    
    <title>Teacher Change Password</title>
</head>
<body>
   
<?php
include "topbar.php";
?>
        <section class="change-box">

            <form action="">
     	<h2>Change Password</h2>
     	<label>Old Password</label>
     	<input type="password" 
     	       name="" 
     	       placeholder="Old Password">
     	       <br>

     	<label>New Password</label>
     	<input type="password" 
     	       name="" 
     	       placeholder="New Password">
     	       <br>

     	<label>Confirm New Password</label>
     	<input type="password" 
     	       name="" 
     	       placeholder="Confirm New Password">
     	       <br>

     	<button type="submit">Update</button>
          <a href="teacher-home.php" class="link-home">Home</a>
     </form>
  </section>

  <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>
</html>