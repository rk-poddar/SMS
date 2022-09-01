<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#8a2be2">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/student-home.css">
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">    
    <title>Student Homepage</title>
</head>
<body>
   
    <?php
    include "sidenav.php";
    ?>
<section class="count">
      <a href="student-class.php">
     <div class="box-container">
        <div class="box">
          <div class="content">
             <h6>Semester :: 6th</h6>
           <h3>AI</h3>
           <h4>BTCS 602-18</h4>
          </div>
        </div> </a>

        <a href="student-class.php"><div class="box">
          <div class="content">
            <h6>Semester :: 6th</h6>
           <h3>CD</h3>
           <h4>BTCS 601-18</h4>

          </div>
        </div></a>

       <a href="student-class.php"> <div class="box">
          <div class="content">
        <h6>Semester :: 6th</h6>
           <h3>WCS</h3>
           <h4>BTEC 601-18</h4>
          </div>
        </div></a>

        <a href="student-class.php"><div class="box">
          <div class="content">
            <h6>Semester :: 6th</h6>
           <h3>ML</h3>
           <h4>BTCS 416-18</h4>
          </div>
        </div>
        </a>
      </div>
    </section>

  <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>
</html>