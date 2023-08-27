<?php 

echo'
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
    <form class="row g-3">

            <div class="col-12">
                <label for="inputEmail4" class="form-label">Email:</label>
                <input type="email" class="form-control" id="inputEmail4">
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

            <button class="btn btn-primary" id="Login">Log In</button>
            
            </form>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#SignIn" data-bs-toggle="modal">Sign In</button>
    </div>
    </div>
    </div>
    </div>
    </div>  
';
?>