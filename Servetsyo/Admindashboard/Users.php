<?php
require '../phpconfig/config.php';

session_start();

if (isset($_SESSION['admin_id'])) {

  include "../Adminlog/adminsession.php";
  $user = getUserById($_SESSION['admin_id'], $conn);



?>

  <?php if ($_SESSION['User_type'] == 'SuperAdmin') { ?>

    <!DOCTYPE html>
    <html>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <title>User List</title>


      <?php include 'design/datatablelink.php'; ?>

      <?php include 'design/header.php'; ?>
      <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php include 'design/sidebar.php'; ?>
        <!-- Main body design -->
        <section class="tables container">
          <div class="position-relative">
            <h1>User List</h1>
            <button class="position-absolute top-0 end-0 button" style="width: max-content; border: none; padding: 4px; " onclick="window.location.href='user.php';">
              <input style="color: white;" type="submit" value="Add Account">
            </button>
          </div>
          <table class="table" id="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>User type</th>
                <th>Date Created</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              $rows = mysqli_query($con, "SELECT * FROM user")
              ?>
              <?php foreach ($rows as $row) : ?>
                <tr>
                  <td><?php echo $row["user_id"] ?></td>
                  <td><?php echo $row["Fullname"] ?></td>
                  <td><?php echo $row["Email"] ?></td>
                  <td><?php echo $row["PhoneNum"] ?></td>
                  <td><?php echo $row["Address"] ?></td>
                  <td><?php echo $row["RoleType"] ?></td>
                  <td><?php echo $row["CreateDate"] ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </section>

      </div>
      </nav>
      </div>

      <?php include 'design/footer.php'; ?>
      <script>
        $(document).ready(function() {
          new DataTable('#table');
        });
      </script>

    <?php } else {
    echo '<script>alert("Only for Superadmin")</script>';
    echo '<script>window.location.href = "Dashboard.php";</script>';
  } ?>



  <?php } else {
  echo '<script>alert("Log in first")</script>';
  echo '<script>window.location.href = "login.php";</script>';
} ?>