<?php

include_once 'config.php';

if (isset($_POST['save'])) {
  $FullN = $_POST['FullN'];
  $PhoneNum = $_POST['PhoneNum'];
  $Animal = $_POST['Animal'];
  $Sched = $_POST['Sched'];
  $PetName = $_POST['PetName'];
  $Breed = $_POST['Breed'];
  $Color = $_POST['Color'];
  $Age = $_POST['Age'];
  $Gender = $_POST['Gender'];
  $Message = $_POST['Message'];
  $user_id = $_POST['user_id'];

  // Check if the selected value is "other"
  if ($Animal === 'other') {
    // Capture the user input from the "Name Animal" input field
    $Animal = $_POST['Animal2'];
  }

  // Check if the selected value is "other"
  if ($Sched === 'other') {
    // Capture the user input from the "Name Animal" input field
    $Sched = $_POST['Sched2'];
  }

  $sql = "INSERT INTO schedule (FullN,PhoneNum,Sched,Animal,PetName,Breed,Color,Age,Gender,Message,user_id,status) 
     VALUES ('$FullN','$PhoneNum','$Sched','$Animal','$PetName','$Breed','$Color','$Age','$Gender','$Message','$user_id','Pending')";

  // insert in database 
  $Save = mysqli_query($con, $sql);
  if ($Save) {
    echo '<script type="text/javascript">
        alert("Successfully Submitted");
        window.location.href = "../service.php";
        </script>';
  }
}

if (isset($_POST['btnHideSubmit'])) {
  $id = $_POST['id'];
  $status = $_POST['hiddenStatus'];

  $sql = "UPDATE schedule SET status =  '$status' WHERE Schedule_id = $id ";

  $Save = mysqli_query($con, $sql);
  if ($status === 'Approve') {
    echo '<script type="text/javascript">
        window.location.href = "../Admindashboard/Appointment.php";
        </script>';
    die;
  } else {
    echo '<script type="text/javascript">
        window.location.href = "../Admindashboard/Appointment.php";
        </script>';
  }
}


if (isset($_POST['setdate'])) {
  $id = $_POST['id'];
  $SetDate = $_POST['SetDate'];

  $sql = "UPDATE schedule SET SetDate =  '$SetDate' WHERE Schedule_id = $id ";
  $Save = mysqli_query($con, $sql);
  if ($Save) {
    echo '<script type="text/javascript">
        window.location.href = "../Admindashboard/Appointment.php";
        </script>';
  }
}
