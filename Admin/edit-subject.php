<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manage Subject</title>
    <link rel="stylesheet" href="styles/managesubject-edit.css" />

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
        <h1><i class="las la-edit"></i> Manage Subject</h1>
      </header>

      <main>
        <div class="add-subject-form">
          <h2> Manage Subject</h2>

          <?php

           $subid = $_GET['id'];

            $sql = "SELECT * FROM addsubject WHERE subid={$subid}";
            $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
          ?>

          <form action="update-subject.php" class="subject-form" method="POST">

            <label for="">Subject Name</label>
            <input type="hidden" name="subid" placeholder="Enter ID" value="<?php echo $row['subid']; ?>" required />
            <input type="text" name="subname" placeholder="Enter Subject Name" value="<?php echo $row['subname']; ?>" required />

            <label for="">Subject Code</label>
            <input type="text" name="subcode" placeholder="Enter Suject Code" value="<?php echo $row['subcode']; ?>" required />

            <label for="course">Class</label>

            <?php 

                $sql1 = "SELECT * FROM addclass"; //combine two columnin single column
                $result1 = mysqli_query($conn, $sql1) or die("Query unsuccessful");

                if(mysqli_num_rows($result1) > 0){
                  echo '<select name="subclass" id="select-course" required>';
                while($row1 = mysqli_fetch_assoc($result1)){
                  if($row['subclass']==$row1['classid']){
                    $select = "selected";
                  }else{
                    $select = "";
                  }
                echo "<option {$select} value='{$row1['classid']}'>{$row1['classname']}</option>";
                }

                echo '</select>';

            } ?>


            <label for="">Semester</label>
            <input type="number" name="sem" placeholder="Enter Semester" value="<?php echo $row['sem']; ?>" />


            <label for="teacher">Assign Teacher</label>
            <?php 

                $sql1 = "SELECT * FROM addteacher"; //combine two columnin single column
                $result1 = mysqli_query($conn, $sql1) or die("Query unsuccessful");

                if(mysqli_num_rows($result1) > 0){
                  echo '<select name="assignteacher" id="select-course" required>';
                while($row1 = mysqli_fetch_assoc($result1)){
                  if($row['assignteacher']==$row1['tid']){
                    $select = "selected";
                  }else{
                    $select = "";
                  }
                echo "<option {$select} value='{$row1['tid']}'>{$row1['name']}</option>";
                }

                echo '</select>';

            } ?>
    
            <div class="form-footer">
              <button class="managesubject" name="updatesub">Update Subject</button>
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
