<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Teacher</title>
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
          <h2> Add Teacher</h2>


          <form action="" class="teacher-form" method="POST" enctype="multipart/form-data">

            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter Full Name" required />

            <label for="photo">Photo</label>
            <input type="file" name="tcphoto" value="" required />
            
            <label for="gender">Gender</label>
            <select name="gender" id="" required>
              <option value="Select Gender" selected disabled>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
            <label for=""> Email</label>
            <input type="email" name="email" placeholder="Enter Email" required />

            <label for="">Mobile</label>
            <input type="number" name="mobile" placeholder="Enter mobile number" required />

            <label for="">Department</label>
            <select name="dpt" id="" required>
              <option value="Select Department" selected disabled>Select Department</option>

              <?php 

                $sql = "SELECT * FROM addclass"; //combine two columnin single column
                $result = mysqli_query($conn, $sql) or die("Query unsuccessful");

                while($row = mysqli_fetch_assoc($result)){

                ?>
                <option value="<?php echo $row['classid'] ?>"><?php echo $row['classname'] ?></option>

              <?php } ?>

            </select>
            
            <h2><span>Teacher Login Details</span></h2>
            <label for="">Username</label>
            <input type="email" name="username" placeholder="Enter Email" required />

            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter Password" required />

            <label for="">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" required />
            <div class="form-footer">
              <button class="addteacher" name="addtc">Add Teacher</button>
            </div>
          </form>
        </div>
      </main>
    </div>


<?php
//insert photo or files 
if(isset($_FILES['tcphoto'])){


  $file_name = $_FILES['tcphoto']['name'];
  $file_size = $_FILES['tcphoto']['size'];
  $file_tmp = $_FILES['tcphoto']['tmp_name'];
  $file_type = $_FILES['tcphoto']['type'];


  $tcphoto = move_uploaded_file($file_tmp, "tcphoto/".$file_name);

}

//insert data only
if(isset($_POST['addtc'])){
  
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $class = $_POST['dpt'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);

    $query = "INSERT INTO addteacher(tcphoto, name, gender, email, mobile, sclass, username, password) VALUES ('$file_name','$name','$gender','$email','$mobile','{$class}','$username','$password')";
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
