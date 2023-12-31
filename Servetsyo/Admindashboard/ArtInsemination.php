<?php

require_once '../phpconfig/ArtInsem.php';

session_start();

if (isset($_SESSION['admin_id'])) {

  include "../Adminlog/adminsession.php";
  $user = getUserById($_SESSION['admin_id'], $conn);


  $sql = "SELECT * FROM insemination where status='pending' ";
  $all_insemination = $con->query($sql);


?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Artificial Insemination</title>

    <?php include 'design/header.php'; ?>
    <div class="wrapper">
      <!-- Sidebar Holder -->
      <?php include 'design/sidebar.php'; ?>


      <section class="tables container">

        <h1>Artificial Insemination</h1>
        <table class="table">
          <thead>
            <tr class="head">
              <th>Full Name</th>
              <th>Contact Number</th>
              <th>Kind of Animal</th>
              <th>Description</th>
              <th>Location</th>
              <th>Date Requested</th>
              <th>Set Date</th>
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
                <td><?php echo $row["Details"] ?></td>
                <td><?php echo $row["Coordinates"] ?></td>
                <td><?php echo $row["ReqDate"] ?></td>
                <td>
                  <form action="../phpconfig/ArtInsem.php" method="POST">
                    <input type="date" id="dt" name="SetDate" value="<?php echo $row['SetDate'] ?>">
                    <input type="hidden" name="id" id="id" value="<?php echo $row['Insemination_ID'] ?>">
                    <button name="setdate"> <i class="bi bi-calendar2-check"></i></button>
                  </form>
                </td>
                <td><label for="approval"></label>
                  <button class="btn btn-sm <?php echo $row['status'] == 'Approve' ? 'btn-success' : 'btn-danger' ?>" value="<?php echo $row["Insemination_ID"] ?>" id="btnStatus">
                    <?php echo $row["status"] ?>
                  </button>
              </tr>

              <form action="../phpconfig/ArtInsem.php" method="post" hidden>
                <input type="hidden" name="id" id="id" value="<?php echo $row['Insemination_ID'] ?>">
                <input type="hidden" name="hiddenStatus" id="<?php echo $row["Insemination_ID"] ?>hiddenStatus" value="">
                <button type="submit" id="<?php echo $row["Insemination_ID"] ?>" name="btnHideSubmit" hidden></button>
              </form>

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
    </body>

  <?php } else {
  echo '<script>alert("Log in first")</script>';
  echo '<script>window.location.href = "login.php";</script>';
} ?>

  <script>
    document.getElementById('dt').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
  </script>