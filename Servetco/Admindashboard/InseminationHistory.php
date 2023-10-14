<?php

require_once '../phpconfig/ArtInsem.php';

session_start();

if (isset($_SESSION['admin_id'])) {

  include "../Adminlog/adminsession.php";
  $user = getUserById($_SESSION['admin_id'], $conn);


  $sql = "SELECT * FROM insemination";
  $all_insemination = $con->query($sql);


?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <?php include 'design/datatablelink.php'; ?>

    <title>Artificial Insemination</title>

    <?php include 'design/header.php'; ?>
    <div class="wrapper">
      <!-- Sidebar Holder -->
      <?php include 'design/sidebar.php'; ?>


      <section class="tables container">

        <h1>Artificial Insemination History</h1>
        <table class="table" id="table">
          <thead>
            <tr class="head">
              <th>Full Name</th>
              <th>Contact Number</th>
              <th>Kind of Animal</th>
              <th>Location</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

            <?php
            while ($row = $all_insemination->fetch_assoc()) {
            ?>
              <tr>
                <td><?php echo $row["Name"] ?></td>
                <td><?php echo $row["ContNum"] ?></td>
                <td><?php echo $row["Animal"] ?></td>
                <td><?php echo $row["Coordinates"] ?></td>
                <td><?php echo $row["status"] ?></td>
              <?php
            }
              ?>

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
    </body>

  <?php } else {
  echo '<script>alert("Log in first")</script>';
  echo '<script>window.location.href = "login.php";</script>';
} ?>