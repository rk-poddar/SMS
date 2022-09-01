<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#8a2be2">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/student-resources.css">
<!-- line awesome link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">    
    <title>Student Resources</title>
</head>
<body>
   
    <?php
include "sidenav.php";
    ?>
 <table class="resource-table">

    <thead>
        <th>Date</th>
        <th>Topic Name</th>
        <th>File</th>
        <th>Descrption</th>
    </thead>
    <tbody>
        <tr>
            <td>21/04/2222</td>
           <td>Reinforcement Learning</td>
           <td><a href=""><i class="las la-download"></i></a></td>
           <td>page no. 2</td>
          </tr>
        <tr>
        
        <td>21/04/2222</td>
        <td>Agents</td>
           <td><a href=""></a></td>
           <td>https://icons8.com/line-awesome</td>
          
          </tr>
        <tr>
            <td>21/05/2022</td>
           <td>Reinforcement Learning</td>
           <td><a href=""><i class="las la-download"></i></a></td>
           <td></td>
          
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