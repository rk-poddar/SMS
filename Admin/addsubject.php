<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Subject</title>
    <link rel="stylesheet" href="styles/addsubject.css" />

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
        <h1><i class="las la-book-medical"></i> Add Subject</h1>
      </header>

      <main>
        <div class="add-subject-form">
          <h2> Add Subject</h2>


          <form action="" class="subject-form" method="POST">

            <label for="">Subject Name</label>
            <input type="text" name="subname" placeholder="Enter Subject Name" required />

            <label for="">Subject Code</label>
            <input type="text" name="subcode" placeholder="Enter Subject Code" required />

            <label for="course">Class</label>
            <select name="subclass" id="select-course" required>
              <option value="Selected Class" selected disabled>Select Class</option>

              <?php 

                $sql = "SELECT * FROM addclass"; //combine two columnin single column
                $result = mysqli_query($conn, $sql) or die("Query unsuccessful");

                while($row = mysqli_fetch_assoc($result)){

                ?>
                <option value="<?php echo $row['classid'] ?>"><?php echo $row['classname'] ?></option>

              <?php } ?>

            </select>

            <label for="sem">Semester</label>
            <select name="sem" id="" required >
              <option value="" selected disabled>Select Semester</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>

            <label for="teacher">Assign Teacher</label>
            <select name="assignteacher" id="select-course" required>
              <option value="Selected Class" selected disabled>Select Teacher</option>

              <?php 

                $sql = "SELECT * FROM addteacher"; //combine two columnin single column
                $result = mysqli_query($conn, $sql) or die("Query unsuccessful");

                while($row = mysqli_fetch_assoc($result)){

                ?>
                <option value="<?php echo $row['tid'] ?>"><?php echo $row['name'] ?></option>

              <?php } ?>

              </select>
    
            <div class="form-footer">
              <button class="addsubject" name="addsub">Add Subject</button>
            </div>
          </form>
        </div>
      </main>
    </div>

<?php

include "../conn.php";

//insert data only
if(isset($_POST['addsub'])){
  
  $subname = $_POST['subname'];
  $subcode = $_POST['subcode'];
  $subclass = $_POST['subclass'];
  $sem = $_POST['sem'];
  $assignteacher = $_POST['assignteacher'];

    $query = "INSERT INTO addsubject(subname,subcode,subclass,sem,assignteacher) VALUES ('$subname','$subcode','$subclass',$sem,'$assignteacher')";
    $query_run = mysqli_query($conn, $query);

      if($query_run){
        $message1 = "Data Inserted";
          echo "<script> alert('$message1');</script>" ;
      }else{
        echo "error";
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
