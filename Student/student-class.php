<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#8a2be2">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/student-class.css">
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">    
    <title>Student Class</title>
</head>
<body>
   <?php
include "sidenav.php";
   ?>
<section class="count">
      <a href="student-attendence.php">
     <div class="box-container">
        <div class="box">
          <div class="content">
            <i class="las la-user-edit"></i>
           <h3>Attendence</h3>
          </div>
        </div> </a>

        <a href="student-assignment.php"><div class="box">
          <div class="content">
              <i class="las la-file"></i>
           <h3> Assignment</h3>
          </div>
        </div></a>

       <a href="student-result.php"> <div class="box">
          <div class="content">
              <i class="las la-clipboard-list"></i> 
           <h3>Result</h3>
          </div>
        </div></a>

        <a href="student-resources.php"><div class="box">
          <div class="content">
              <i class="las la-hands-helping"></i>
           <h3> Resources</h3>
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