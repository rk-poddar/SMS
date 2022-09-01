<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Student Details</title>
    <link rel="stylesheet" href="styles/addstudent.css" />

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
        <h1><i class="las la-user-plus"></i> Add Student</h1>
      </header>

      <main>
        <div class="add-student-form">
          <h2> Update Student</h2>

          <?php

           $tid = $_GET['id'];

            $sql = "SELECT * FROM addstudent WHERE stid={$tid}";
            $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
          ?>

          <form action="update-student.php" class="student-form" method="POST" enctype="multipart/form-data">

            <label for="">Name</label>
            <input type="hidden" name="id" placeholder="Enter ID" value="<?php echo $row['stid']; ?>" />
            <input type="text" name="name" placeholder="Enter Full Name" value="<?php echo $row['name']; ?>" />

            <label for="RollNo.">Roll No.</label>
            <input type="number" name="rollno"placeholder="Enter Roll No." value="<?php echo $row['rollno']; ?>" />

            <label for="photo">Student Photo</label>
            <input type="file" name="stdphoto" value="<?php echo $row['stdphoto']; ?>" />
            <br><br>
            <img src="stdphoto/<?php echo $row['stdphoto']; ?>" height="100px" width="100px" alt="">
            <input type="hidden" name="oldimg" value="<?php echo $row['stdphoto']; ?>">

            <label for="gender">Gender</label>
            <select name="gender" id="" value="<?php echo $row['gender']; ?>" >
              <option value="" selected disabled>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>

            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" value="<?php echo $row['dob']; ?>" />

            <label for=""> Email</label>
            <input type="email" name="email" placeholder="Enter Email" value="<?php echo $row['email']; ?>" />

            <label for="">Mobile</label>
            <input type="number" name="mobile" placeholder="Enter Mobile number" value="<?php echo $row['mobile']; ?>" />

            <label for="course">Class</label>

            <?php 

                $sql1 = "SELECT * FROM addclass"; //combine two columnin single column
                $result1 = mysqli_query($conn, $sql1) or die("Query unsuccessful");

                if(mysqli_num_rows($result1) > 0){
                  echo '<select name="class" id="" required>';
                while($row1 = mysqli_fetch_assoc($result1)){
                  if($row['sclass']==$row1['classid']){
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

            <h2><span>Parents Details</span></h2>

            <label for="fname">Father's Name</label>
            <input type="text" name="fname" placeholder="Enter Father's Name" value="<?php echo $row['fname']; ?>" />

            <label for="mname">Mother's Name</label>
            <input type="text" name="mname" placeholder="Enter Mother's Name" value="<?php echo $row['mname']; ?>" />

            <label for="">Contact No.</label>
            <input type="number" name="contactno" placeholder="Enter Contact No." value="<?php echo $row['contactno']; ?>" />

            <label for="">Address</label>
            <input type="text" name="address" placeholder=" Enter Address" value="<?php echo $row['address']; ?>" />

            <h2><span>Student Login Details</span></h2>
            <label for="">Username</label>
            <input type="email" readonly name="username" placeholder="Enter Email" value="<?php echo $row['username']; ?>" />

            <label for="">Password</label>
            <input type="password" readonly name="password" placeholder="Enter Password" value="<?php echo $row['password']; ?>" />

            <div class="form-footer">
              <button class="addstudent" name="addstd">Update Student</button>
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
