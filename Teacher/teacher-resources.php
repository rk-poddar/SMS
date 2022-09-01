<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teacher Resources Page</title>
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles/teacher-resources.css" />
        <link rel="stylesheet" href="styles/topbar.css" />

  </head>
  <body>

   <?php
include "topbar.php";
   ?>

     <div class="container">
      <div class="wrapper">
        <div class="title"><span>Resources</span></div>
        <form action="#">
          <div class="row">
            <input type="text" placeholder="Topic Name">
          </div>
          <div class="row">
            <input type="file" placeholder="" >
          </div>
                  <div class="row">
            <input type="text" placeholder="Descreption" >
          </div>
          <div class="row button">
            <input type="submit" value="Upload">
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
