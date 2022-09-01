<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manage Class</title>
    <link rel="stylesheet" href="styles/manageclass.css" />

    <!-- line awesome link -->
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />
    <!-- jquery css -->
    <link
      rel="stylesheet"
      href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"
    />
  </head>
  <body>
    
<?php
include "sidebar.php";
?>

    <!-- main-content -->

    <div class="main-content">
      <header>
        <h1><i class="las la-users"></i> Manage Class</h1>
      </header>

      <main>
        <div class="manage-content">
          <div class="manage-header">
            <h2>Manage Class</h2>
            <a href="addclass.php"><i class="las la-plus-circle"></i> </a>
          </div>

          <?php 

          $sql = "SELECT * FROM addclass";
          $result = mysqli_query($conn, $sql) or die("Query unsuccessful");
          if(mysqli_num_rows($result) > 0){

          ?>

          <div class="manage-table">
            <table id="myTable">
              <thead>
                <th>Sr No.</th>
                <th>Class Name</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php 
                $id = 0; //for id increament
                while($row = mysqli_fetch_assoc($result)){
                $id = $id + 1; //for id increament

                ?>

                <tr>
                  <th><?php echo $id; ?></th>
                  <td><?php echo $row['classname']; ?></td>
                  <td class="tb-center">
                    <a href="edit-class.php?id=<?php echo $row['classid']; ?>"><i class="las la-eye"></i></a>
                    <a href="delete-class.php?id=<?php echo $row['classid']; ?>"><i class="las la-trash" onclick="return confirm('Do you really want to Delete ?');"></i></a>
                  </td>
                </tr>
                <?php } ?>

              </tbody>
            </table>
          </div>
          <?php }else{
              echo "<h2><center>No Record Found</center>
</h2>";
          }
          mysqli_close($conn);
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

    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script
      src="https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js"
      type="text/javascript"
    ></script>
    <script>
      $(document).ready(function () {
        $("#myTable").DataTable({});
      });
    </script>
  </body>
</html>
