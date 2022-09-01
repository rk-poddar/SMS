<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Time Table</title>
    <link rel="stylesheet" href="styles/timetable.css" />

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
        <h1><i class="las la-calendar"></i> Time-Table</h1>
      </header>

      <main>
        <div class="add-timetable-form">
          <h2>Time-Table</h2>

          <form action="" class="timetable-form" method="POST" enctype="multipart/form-data">
            
            <label for="timetable">Upload File</label>
            <input type="file" name="tmtable" value="" required />

            <div class="form-footer">
              <button class="addtimetable" name="addtimetable">Add</button>
              <a href="edit-timetable.php">Update</a>
            </div>
          </form>

          <?php
//insert photo or files 
if(isset($_FILES['tmtable'])){


  $file_name = $_FILES['tmtable']['name'];
  $file_size = $_FILES['tmtable']['size'];
  $file_tmp = $_FILES['tmtable']['tmp_name'];
  $file_type = $_FILES['tmtable']['type'];

  // destination of the file
  $timetable = move_uploaded_file($file_tmp, "timetable/".$file_name);

  // get the file extension
  $extension = pathinfo($file_name, PATHINFO_EXTENSION);

  if (!in_array($extension, ['zip', 'pdf', 'docx', 'xls'])) {
    echo "<h3 style='text-align:center' >Your file extension must be .zip, .pdf, .xls or .docx</h3>";
} elseif ($_FILES['tmtable']['size'] > 2000000) { // file shouldn't be larger than 2Megabyte
    echo "<h3 style='text-align:center' >File size is too large..!</h3>";
} else {
    // move the uploaded (temporary) file to the specified destination
    if ($timetable) {

        $sql = "INSERT INTO timetable(timetable) VALUES ('$file_name')";
        if (mysqli_query($conn, $sql)) {
            echo "<h3 style='text-align:center' >File uploaded successfully..!</h3>";
        }
    } else {
        echo "<h3 style='text-align:center' >Failed to upload file..!</h3>";
    }
}

}

?>

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
