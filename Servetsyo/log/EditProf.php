<?php
include "../phpconfig/config.php";



if (isset($_POST["edit"])) {
    $Address = mysqli_real_escape_string($con, $_POST["Address"]);
    $PhoneNum = mysqli_real_escape_string($con, $_POST["PhoneNum"]);
    $user_id = mysqli_real_escape_string($con, $_POST["user_id"]);
    $sqlUpdate = "UPDATE user SET Address = '$Address', PhoneNum = '$PhoneNum' WHERE user_id='$user_id'";
    if(mysqli_query($con,$sqlUpdate)){
        echo ("<h2>PHP is Fun!</h2>");
        header("Location:../EditProfile.php");
    }else{
        die("Something went wrong");
    }
}