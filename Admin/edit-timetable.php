<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Time Table Update</title>
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
          <h2>Update Time-Table</h2>

          <form action="" class="timetable-form" method="POST" enctype="multipart/form-data">
            
            <label for="timetable">Upload File</label>
            <input type="file" name="tmtable" value="" required />

            <div class="form-footer">
              <button class="addtimetable">Update</button>
              <a href="timetable.php">Back</a>
            </div>
          </form>
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
