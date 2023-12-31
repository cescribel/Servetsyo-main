<?php

include "phpconfig/config.php";
session_start();


?>


<head>
    <meta charset="utf-8">
    <title>Edit Profile </title>
    <link rel="icon" href="img/icon.png" type="image/x-icon">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include 'header.php'; ?>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar sticky-top navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <?php include 'navlogo.php'; ?>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link ">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <a href="Petforadoption.php" class="nav-item nav-link">adoption</a>
                <a href="Events.php" class="nav-item nav-link">Events</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                    <?php include 'AccountDrop.php'; ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- body -->

    <form class="shadow w-450 p-3" action="log/EditProf.php" method="post">
        <div class="container">
            <?php if ($user) { ?>
                <div class="main-body">
                    <div class="container">
                        <div class="main-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                                <div class="mt-3">
                                                    <h4><?= $user['Fullname'] ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-body-user">
                                            <div class="row mb-3">
                                                <input type="hidden" value="<?= $user['user_id'] ?>" name="user_id">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Full Name</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control" value="<?= $user['Fullname'] ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control" value="<?= $user['Email'] ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Phone</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="tel" name="PhoneNum" class="form-control" pattern="[0-9]{11}" maxlength="11" value="<?= $user['PhoneNum'] ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Address</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" name="Address" class="form-control" value="<?= $user['Address'] ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Change Password</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="password" id="New" name="newPassword" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must have at least eight characters and at least one number, an uppercase letter, a lowercase letter, and a special character" placeholder="New Password">
                                                    <input type="password" id="Confirm" name="confirmPassword" class="form-control mt-2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must have at least eight characters and at least one number, an uppercase letter, a lowercase letter, and a special character" placeholder="Confirm New Password">
                                                    <div class="show_pass">
                                                        <input type="checkbox" onclick="Showpass()">&#32;Show Password
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-9 text-secondary">
                                                    <button type="submit" name="edit" class="btn btn-primary">Save Changes</button>
                                                    <a class="btn btn-primary px-2" href="profile.php">Back to profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else {
                header("Location: login.php");
                exit;
            } ?>
        </div>
    </form>
    <!-- body end -->


    <!-- footer -->
    <?php include 'footer.php'; ?>


    <script>
        function Showpass() {
            var newPasswordField = document.getElementById("New");
            var confirmPasswordField = document.getElementById("Confirm");

            if (newPasswordField.type === "password") {
                newPasswordField.type = "text";
                confirmPasswordField.type = "text";
            } else {
                newPasswordField.type = "password";
                confirmPasswordField.type = "password";
            }
        }
    </script>

</body>