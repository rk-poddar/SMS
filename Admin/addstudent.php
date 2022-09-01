<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Student</title>
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
          <h2> Add Student</h2>

          <form action="" class="student-form" method="POST" enctype="multipart/form-data">

            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter Full Name" required />

            <label for="RollNo.">Roll No.</label>
            <input type="number" name="rollno"placeholder="Enter Roll No." value="" required />

            <label for="photo">Student Photo</label>
            <input type="file" name="stdphoto" required />
            
            <label for="gender">Gender</label>
            <select name="gender" id="" required >
              <option value="" selected disabled>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>

            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" value="" required />

            <label for=""> Email</label>
            <input type="email" name="email" placeholder="Enter Email" required />

            <label for="">Mobile</label>
            <input type="number" name="mobile" placeholder="Enter Mobile number" required />

            <label for="course">Class</label>
            <select name="class" id="select-course" required>
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

            <h2><span>Parents Details</span></h2>

            <label for="fname">Father's Name</label>
            <input type="text" name="fname" placeholder="Enter Father's Name" required />

            <label for="mname">Mother's Name</label>
            <input type="text" name="mname" placeholder="Enter Mother's Name" required />

            <label for="">Contact No.</label>
            <input type="number" name="contactno" placeholder="Enter Contact No." required />

            <label for="">Address</label>
            <input type="text" name="address" placeholder=" Enter Address" required />

            <h2><span>Student Login Details</span></h2>
            <label for="">Username</label>
            <input type="email" name="username" placeholder="Enter Email" required />

            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter Password" required />

            <label for="">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" required />
            <div class="form-footer">
              <button class="addstudent" name="addstd">Add Student</button>
            </div>
          </form>
        </div>
      </main>
    </div>


<?php
//insert photo or files 
if(isset($_FILES['stdphoto'])){


  $file_name = $_FILES['stdphoto']['name'];
  $file_size = $_FILES['stdphoto']['size'];
  $file_tmp = $_FILES['stdphoto']['tmp_name'];
  $file_type = $_FILES['stdphoto']['type'];


  $stdphoto = move_uploaded_file($file_tmp, "stdphoto/".$file_name);

}

//insert data only
if(isset($_POST['addstd'])){
  
  $rollno = $_POST['rollno'];  
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $dob = date('Y-m-d', strtotime($_POST['dob']));
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $class = $_POST['class'];
  $sem = $_POST['sem'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $contactno = $_POST['contactno'];
  $address = $_POST['address'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);

    $query = "INSERT INTO addstudent(rollno, stdphoto, name, gender, dob, email, mobile, sclass, sem, fname, mname, contactno, address, username, password) VALUES ('$rollno','$file_name','$name','$gender','$dob','$email','$mobile','$class','$sem','$fname','$mname','$contactno','$address','$username','$password')";
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
