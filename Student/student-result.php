<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#8a2be2">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/student-result.css">
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">    
    <title>Student Result</title>
</head>
<body>
   <?php
include "sidenav.php";
   ?>
   
 <table class="result-table">

    <thead>
        <th>Roll No</th>
        <th>Name</th>
        <th>MST-1</th>
        <th>MST-2</th>
    </thead>
    <tbody>
        <tr>
            <td>434</td>
            <td>Shubham</td>
            <form action="">
           <td>15</td>
          <td>12</td>
          </form>
          </tr>
    </tbody>

</table>

  <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>
</html>