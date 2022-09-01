<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teacher Attendence</title>
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles/teacher-attendence.css" />
  </head>
  <body>
  <?php
include "topbar.php";
  ?>

    <section>
        <div class="atd-header">
            <h1>Attendence</h1>
            <h2>Subject: DSA</h2>
            <h3>Date: 21/04/2022</h3>
            <h4>Total Student: 4</h4>
        </div>
<table class="attendence-table">

    <thead>
        <th>Roll No</th>
        <th>Name</th>
        <th>Mark Attendence</th>
    </thead>
    <tbody>
        <tr>
            <td>404</td>
            <td>Param</td>
            <form action="">
           <td> <input type="checkbox"></td>
          </form>
          </tr>
            <td>412</td>
            <td>Rahul Kumar</td>
            <form action="">
           <td> <input type="checkbox"></td>
          </form>
          </tr>      
           <tr>
            <td>422</td>
            <td>Sagar Chauhan</td>
            <form action="">
           <td> <input type="checkbox"></td>
          </form>
          </tr>
          <tr>
            <td>434</td>
            <td>Shubham Kumar</td>
            <form action="">
           <td> <input type="checkbox"></td>
          </form>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><button type="submit">Done</button></td>
          </tr>
    </tbody>

</table> 
    </section>


  </body>
</html>
