<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#8a2be2">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/student-attendence.css">
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">    
    <title>Student Attendence</title>
</head>
<body>
   
<?php
include "sidenav.php";
?>
<section>
  <div class="atd-header">
            <h1>Attendence</h1>
            <h2>Subject: AI</h2>
            <h4>Total Lectures: 6</h4>
        </div>
<table class="attendence-table">

    <thead>
        <th>S.N.</th>
        <th>Date</th>
        <th>Status</th>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>26/04/2022</td>
            <td>P</td>
          </tr>
        <tr>
            <td>2</td>
            <td>25/04/2022</td>
            <td>A</td>
          </tr>      
           <tr>
            <td>3</td>
            <td>24/04/2022</td>
            <td>P</td>
          </tr>
           <tr>
               <td>4</td>
            <td>23/04/2022</td>
            <td>P</td>
          </tr>
          <tr>
            <td>5</td>
            <td>22/04/2022</td>
            <td>P</td>
          </tr>
           <tr>
               <td>6</td>
            <td>21/04/2022</td>
            <td>P</td>
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