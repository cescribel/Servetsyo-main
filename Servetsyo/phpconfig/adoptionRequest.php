<?php

include_once 'config.php';

if (isset($_POST['save'])) {
  $Fullname = $_POST['Fullname'];
  $PhoneNum = $_POST['PhoneNum'];
  $Address = $_POST['Address'];
  $PhoneNum = $_POST['PhoneNum'];
  $Email = $_POST['Email'];
  $Interview = $_POST['Interview'];
  $Date = $_POST['Date'];
  $Dog_id = $_POST['Dog_id'];
  $user_id = $_POST['user_id'];


  $sql = "INSERT INTO adoptionrequest (Fullname,PhoneNum,Address,Email,Interview,Date,Dog_id,status,user_id) 
     VALUES ('$Fullname','$PhoneNum','$Address','$Email','$Interview','$Date','$Dog_id','Pending','$user_id')";

  // insert in database 
  $Save = mysqli_query($con, $sql);
  if ($Save) {
    echo '<script type="text/javascript">
        alert("Successfully Submitted");
        window.location.href = "../Petforadoption.php";
        </script>';
    die;
  }
}

if (isset($_POST['btnHideSubmit'])) {
  $id = $_POST['id'];
  $status = $_POST['hiddenStatus'];

  $sql = "UPDATE adoptionrequest SET status =  '$status' WHERE AdoptReq_id = $id ";

  $Save = mysqli_query($con, $sql);
  if ($status === 'Approve') {
    echo '<script type="text/javascript">
          window.location.href = "../Admindashboard/Adoption_Request.php";
          </script>';
    die;
  } else {
    echo '<script type="text/javascript">
          window.location.href = "../Admindashboard/Adoption_Request.php";
          </script>';
  }
}


if (isset($_POST['setdate'])) {
  $id = $_POST['id'];
  $SetDate = $_POST['SetDate'];

  $sql = "UPDATE adoptionrequest SET SetDate =  '$SetDate' WHERE AdoptReq_id = $id ";
  $Save = mysqli_query($con, $sql);
  if ($Save) {
    echo '<script type="text/javascript">
          window.location.href = "../Admindashboard/Adoption_Request.php";
          </script>';
  }
}
