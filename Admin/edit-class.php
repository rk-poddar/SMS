<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Class Details</title>
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
          <h2>Update Class</h2>

          <?php

           $cid = $_GET['id'];

            $sql = "SELECT * FROM addclass WHERE classid={$cid}";
            $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
          ?>

          <form action="update-class.php" class="class-form" method="POST">
            <label for="">Class Name</label>
            <input type="hidden" name="classid" value="<?php echo $row['classid']; ?>" />
            <input type="text" name="classname" placeholder="Enter Subject Name" required value="<?php echo $row['classname']; ?>" />

            <div class="form-footer">
              <button class="addclass" name="upclass">Update class</button>
            </div>
          </form>
          <?php } } ?>
        </div>
      </main>
    </div>

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
