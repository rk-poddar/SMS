<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#8a2be2">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/student-assignment.css">
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">    
    <title>Student Assignment</title>
</head>
<body>
   
<?php
include "sidenav.php";
?>
<section>
<table class="assignment-table">

    <thead>
        <th>Assignment Name</th>
        <th>Download File</th>
        <th>Description</th>
        <th>Publish Date</th>
        <th>Submission Date</th>
        <th>Upload Assignment</th>
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td>Assignment 1</td>
            <td><a href=""><i class="las la-download"></i></a></td>
            <td>module 4 and 5</td>
            <td>05/06/2022</td>
            <td>05/06/2022</td>
            <td><input type="file">
          </td>
          <td><i class="las la-upload"></i></td>
          </tr>
            </tbody>

</table> 
    </section>


  <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>
</html>