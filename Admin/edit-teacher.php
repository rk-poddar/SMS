<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Teacher Details</title>
    <link rel="stylesheet" href="styles/addteacher.css" />

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
        <h1><i class="las la-user-tie"></i><i class="las la-plus-circle" style="font-size:15px; margin-left: -8px;"></i> Add Teacher</h1>
      </header>

      <main>
        <div class="add-teacher-form">
          <h2> Update Teacher</h2>

          <?php

           $tid = $_GET['id'];

            $sql = "SELECT * FROM addteacher WHERE tid={$tid}";
            $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
          ?>


          <form action="update-teacher.php" class="teacher-form" method="POST" enctype="multipart/form-data">

            <label for="">Name</label>
            <input type="hidden" name="tid" placeholder="Enter ID" value="<?php echo $row['tid']; ?>" required />
            <input type="text" name="name" placeholder="Enter Full Name" value="<?php echo $row['name']; ?>" required />

            <label for="photo">Photo</label>
            <input type="file" name="tcphoto" value="<?php echo $row['tcphoto']; ?>" />
            <br><br>
            <img src="tcphoto/<?php echo $row['tcphoto']; ?>" height="100px" width="100px" alt="">
            <input type="hidden" name="oldimg" value="<?php echo $row['tcphoto']; ?>">
            
            <label for="gender">Gender</label>
            <select name="gender" id="" required="true">
              <option value="Select Gender" selected disabled>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
            <label for=""> Email</label>
            <input type="email" name="email" placeholder="Enter Email" value="<?php echo $row['email']; ?>" required />

            <label for="">Mobile</label>
            <input type="number" name="mobile" placeholder="Enter mobile number" value="<?php echo $row['mobile']; ?>" required />

            <label for="">Department</label>

            <?php 

                $sql1 = "SELECT * FROM addclass"; //combine two columnin single column
                $result1 = mysqli_query($conn, $sql1) or die("Query unsuccessful");

                if(mysqli_num_rows($result1) > 0){
                  echo '<select name="dpt" id="" required>';
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
            
            <h2><span>Teacher Login Details</span></h2>
            <label for="">Username</label>
            <input type="email" readonly name="username" placeholder="Enter Email" value="<?php echo $row['username']; ?>" required />

            <label for="">Password</label>
            <input type="password" readonly name="password" placeholder="Enter Password" value="<?php echo $row['password']; ?>" required />

            <div class="form-footer">
              <button class="addteacher" name="updatetc">Update Teacher</button>
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
