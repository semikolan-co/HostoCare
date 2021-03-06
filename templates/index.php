<?php
if (isset($_COOKIE['adminid'])) {
   $_SESSION['adminid'] = $_COOKIE['adminid'];
}
if (!isset($_SESSION['adminid'])) {
   header("Location:login.php");
}
include "connection.php";
$page = 'home';
include "header.php";
?>

<div class="container-fluid p-0">



   <div class="row">
      <div class="col-12 col-lg-12 col-xxl-9 d-flex">
         <div class="card flex-fill">
            <div class="card-header">

               <h5 class="card-title mb-0">Book Class Info</h5>
            </div>
            <table id="table" class="table table-hover my-0 table-responsive">
               <thead>
               <tr>
               <td>

               <button class="btn btn-primary" onclick="exportTableToExcel('table', 'bookfreeclass')">Download Table</button>
               
               </td>
               </tr>
                  <tr>
                     <th>Kid's Name</th>
                     <th>Class</th>
                     <th>Age</th>
                     <th>Parent's Name</th>
                     <th>Contact</th>
                     <th>Email</th>
                     <th>Actions</th>
                     <th>Date</th>
                     <th>Time</th>
                     <!-- <th class="d-none d-xl-table-cell">Start Date</th>
                  <th class="d-none d-xl-table-cell">End Date</th>
                  <th>Status</th>
                  <th class="d-none d-md-table-cell">Assignee</th> -->
                  </tr>
               </thead>
               <tbody>
                  <?php
                  $query = "SELECT * from `users` WHERE registered = 0";
                  $result = mysqli_query($conn, $query);
                  if (mysqli_num_rows($result) > 0) {
                     while ($row = mysqli_fetch_assoc($result)) {

                        echo '<tr>
               
                  <td>' . $row["kidname"] . '</td>
                  <td>' . $row["kidclass"] . '</td>
                  <td>' . $row["kidage"] . '</td>
                  <td>' . $row["parentname"] . '</td>
                  <td><a href="tel:' . $row["parentphone"] . '">' . $row["parentphone"] . '</a></td>
                  <td>' . $row["parentemail"] . '</td>
                  <td class="table-action">
                     <a href="registeruser.php?id=' . $row["id"] . '"><i class="align-middle" data-feather="user-check"></i></a>
                     <a href="deleteuser.php?id=' . $row["id"] . '"><i class="align-middle" data-feather="trash"></i></a>
                  </td>
                  <td>' . $row["date"] . '</td>
                  <td>' . $row["time"] . '</td>
               </tr>';
                     }
                  } else {
                     echo "<tr>
               
                  <td>No Result Found</td></tr>";
                  }
                  ?>

               </tbody>
            </table>
         </div>
      </div>

   </div>

</div>


<?php include "footer.php" ?>