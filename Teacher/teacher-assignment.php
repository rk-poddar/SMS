<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teacher Assignment Page</title>
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles/teacher-assignment.css" />
  </head>
  <body>
<?php
include "topbar.php";
?>
     <div class="container">
      <div class="wrapper">
        <div class="title"><span>Assignment</span></div>
        <form action="#">
          <div class="row">
            <input type="text" placeholder="Assignment Name">
          </div>
          <div class="row">
            <input type="file" placeholder="" >
          </div>
                  <div class="row">
            <input type="text" placeholder="Descreption" >
          </div>
                  <h2>Date:</h2>
                  <div class="row">
            <input type="date" placeholder="" >
          </div>
          <h2>Submition Date:</h2>
                  <div class="row">
                      
            <input type="date" placeholder="" >
          </div>
          <div class="row button">
            <input type="submit" value="Upload">
          </div>
        </form>
      </div>

    </div>
<div class="assign-box">
<table class="assignment-table">

    <thead>
        <th>S.No</th>
        <th>Roll No</th>
        <th>Name</th>
        <th>Assignment Name</th>
        <th>Submit Date</th>
        <th>File</th>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>434</td>
            <td>Shubham Kumar</td>
            <td>Assignment-1</td>
            <td>22/04/2022</td>
<td><a href="#"><i class="las la-download"></i></a></td>
          </tr>
             </tbody>

</table>
</div>
  </body>
</html>
