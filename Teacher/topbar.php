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
    <meta name="theme-color" content="#8a2be2">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="styles/topbar.css">
  </head>

<body>

<div class="topbar-box">
  <div class="navbar">
   
  <div class="navbar_left">
      <div class="logo" style="display: flex; align-items: center;">
        <i class="las la-graduation-cap" style="font-size: 35px; color: blueviolet; margin-right: 5px;"></i>
        <div><a href="teacher-home.php">M I M I T</a></div>
      </div>
    </div>

    <div class="navbar_right">

      <div class="profile">
        <div class="icon_wrap">
          <i class="las la-bars" style="font-size: 30px; color: blueviolet;" ></i>
        </div>

        <div class="profile_dd">
          <ul class="profile_ul">
            <li><a class="address" href="teacher-profile.php"><span class="picon"><i class="las la-user-circle"></i></span>Profile</a></li>
            <li><a class="address" href="teacher-notice.php"><span class="picon"><i class="las la-bell"></i></span>Notice</a></li>
            <li><a class="address" href="teacher-schedule.php"><span class="picon"><i class="las la-calendar-week"></i></span>Scedule</a></li>
            <li><a class="settings" href="teacher-change-password.php"><span class="picon"><i class="las la-user-lock"></i></span>Setting</a></li>
            <li><a class="logout" href="logout.php"><span class="picon"><i class="las la-file-export"></i></span>Logout</a></li>
          </ul>
        </div>

      </div>

    </div>
  </div>
  
<!-- jquery code -->

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".profile .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			  $(".notifications").removeClass("active");
			});

			$(".notifications .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			   $(".profile").removeClass("active");
			});

			$(".show_all .link").click(function(){
			  $(".notifications").removeClass("active");
			  $(".popup").show();
			});

			$(".close").click(function(){
			  $(".popup").hide();
			});
		});
	</script>
</body>
</html>