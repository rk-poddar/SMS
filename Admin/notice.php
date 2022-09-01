<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notice</title>
    <link rel="stylesheet" href="styles/notice.css" />

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
        <h1><i class="las la-newspaper"></i> Add Notice</h1>
      </header>

      <main>
        <div class="add-notice-form">
          <h2>Add Notice</h2>

          <form action="" class="notice-form" method="POST" enctype="multipart/form-data">
            <label for="">Notice Title</label>
            <input type="text" name="ntitle" placeholder="Title" required />

            <label for="photo">Upload File</label>
            <input type="file" name="anotice" value="" required />

            <div class="form-footer">
              <button class="addnotice" name="addnotice">Add</button>
              <!-- <button class="addnotice">Manage</button> -->
            </div>
          </form>

          <?php
//insert photo or files 
if(isset($_FILES['anotice'])){


  $file_name = $_FILES['anotice']['name'];
  $file_size = $_FILES['anotice']['size'];
  $file_tmp = $_FILES['anotice']['tmp_name'];
  $file_type = $_FILES['anotice']['type'];

  // destination of the file 
  $notice = move_uploaded_file($file_tmp, "notice/".$file_name);

  // get the file extension
  $extension = pathinfo($file_name, PATHINFO_EXTENSION);
  
  if (!in_array($extension, ['zip', 'pdf', 'docx', 'xls'])) {
    echo "<h3 style='text-align:center' >Your file extension must be .zip, .pdf, .xls or .docx</h3>";
} elseif ($_FILES['anotice']['size'] > 2000000) { // file shouldn't be larger than 2Megabyte
    echo "<h3 style='text-align:center' >File size is too large..!</h3>";
} else {
    // move the uploaded (temporary) file to the specified destination
    if ($notice) {

        $ntitle = $_POST['ntitle'];
        $sql = "INSERT INTO notice(ntitle, anotice) VALUES ('$ntitle', '$file_name')";
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
