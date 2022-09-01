<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Class</title>
    <link rel="stylesheet" href="styles/addclass.css" />

    <!-- line awesome link -->
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
  </head>
  <body>
    <?php
include "sidebar.php";
    ?>
    <!-- main-content -->

    <div class="main-content">
      <header>
        <h1><i class="las la-chalkboard-teacher"></i> Add Class</h1>
      </header>

      <main>
        <div class="add-class-form">
          <h2>Add Class</h2>

          <form action="" class="class-form" method="POST">
            <label for="">Class Name</label>
            <input type="text" name="classname" placeholder="Enter Subject Name" required />

            <div class="form-footer">
              <button class="addclass" name="addclass">Add class</button>
            </div>
          </form>
        </div>
      </main>
    </div>

<?php

//insert data only
if(isset($_POST['addclass'])){
  
  $classname = $_POST['classname'];

    $query = "INSERT INTO addclass(classname) VALUES ('$classname')";
    $query_run = mysqli_query($conn, $query);

      if($query_run){
        $message1 = "Data Inserted";
          echo "<script> alert('$message1');</script>" ;
      }

}

?>

    <!-- js code -->

    <script>
      let toggle_btn = document.querySelector("#toggle-btn");
      let sidebar = document.querySelector(".sidebar");

      toggle_btn.onclick = function () {
        sidebar.classList.toggle("active");
      };
    </script>
  </body>
</html>
