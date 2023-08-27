<?php

require_once 'phpconfig/Login.php';

?>


<head>

        <meta charset="utf-8">
        <title>About </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php include 'header.php';?>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar sticky-top navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <?php include 'navlogo.php';?>
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link active">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <a href="Petforadoption.php" class="nav-item nav-link">adoption</a>
                <a href="Events.php" class="nav-item nav-link">Events</a>
                <button class="my-Button" data-bs-target="#SignIn" data-bs-toggle="modal">Login</button>
        </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Login -->
    <div class="login">
<!-- Login -->
<div class="modal fade" id="SignIn" aria-hidden="true" aria-labelledby="SignInLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
  <div class="modal-header">
    <h1 class="modal-title fs-5" id="SignInLabel">Sign In</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">

    <form class="row g-3">
          <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <button class="btn btn-primary" id="Login">Log In</button>
        </form>
  </div>

  <div class="modal-footer">
    <button class="btn btn-primary" data-bs-target="#Signup" data-bs-toggle="modal">Sign up</button>
  </div>
</div>
</div>
</div>

<!-- Sign up -->
    <div class="modal fade" id="Signup" aria-hidden="true" aria-labelledby="SignupLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="SignupLabel">Sign Up</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    <form method="post" action="phpconfig/Login.php" class="row g-3">
                            <div>
                            <div class="col-12">
                                <label for="Email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="Email">
                            </div>

                            <div class="col-12">
                                <label for="Password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="Password" name="Password">
                            </div>

                            <div class="col-12">
                                <label for="Fullname" class="form-label">Fullname:</label>
                                <input type="text" class="form-control" id="Fullname" name="Fullname">
                            </div>

                            <div class="col-12">
                                <label for="PhoneNum" class="form-label">Phone Number:</label>
                                <input type="text" class="form-control" id="Phone Number" name="PhoneNum" placeholder="09-------">
                            </div>

                            <div class="col-12">
                                <label for="Address" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="Address" name="Address" placeholder="Apartment, studio, or floor">
                            </div>

                            <input type="submit" name="save" value="Upload">
                            </div>
                            </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#SignIn" data-bs-toggle="modal">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!-- Login end -->
   

 <!-- About Start -->
 <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/baliuag.jpg" style="object-fit: cover;">
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5 text-uppercase mb-0">We Keep Your Pets Happy All Time</h1>
                    </div>
                    <h4 class="text-body mb-4">To psdrovide Baliwagenyos with free veterinary services especially to those who love animals.</h4>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Our Mission</button>
                            </li>

                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Our Vision</button>
                            </li>

                        </ul>

                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                            <p>The local Government of Baliwag shall implement policies and programs that will promote a fully functional e-government, business friendly environment, competitive quality of education, and active people participation through a professional bureaucracy with government personnel willing to do the extra mile in public service.</p>
                        </div>

                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                            <p>The city of Baliwag is the center for trade and commerce, education, and technological advancement within the region with God-centered, empowered and healthy people living in a sustainable environment under pro-active governance.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Footer Start -->
    <?php include 'footer.php';?>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  
  <!-- Template Javascript --> 
    <script src="js/main.js"></script>
</body>
