<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teacher-Class Page</title>
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles/teacher-class.css" />
    
  </head>
  <body>
<?php include "topbar.php"; ?>
    <section class="count">
      <a href="teacher-attendence.php">
     <div class="box-container">
        <div class="box">
          <div class="content">
            <i class="las la-user-edit"></i>
           <h3> Mark Attendence</h3>
          </div>
        </div> </a>

        <a href="teacher-assignment.php"><div class="box">
          <div class="content">
              <i class="las la-file"></i>
           <h3> Assignment</h3>
          </div>
        </div></a>

       <a href="teacher-result.php"> <div class="box">
          <div class="content">
              <i class="las la-clipboard-list"></i> 
           <h3>Result</h3>
          </div>
        </div></a>

        <a href="teacher-resources.php"><div class="box">
          <div class="content">
              <i class="las la-hands-helping"></i>
           <h3> Resources</h3>
          </div>
        </div>
        </a>
      </div>
    </section>

  </body>
</html>
