
<head>
    <?php include 'header.php';?>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar sticky-top navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.php" class="navbar-brand ms-lg-5" style="color: #378ACA; font-weight: bold; ">
        <img src="img/logo.jpg"  class="img-fluid" style="width: 90px; height: ms-auto;" alt="..." >
        SERVETSYO
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link active">Service</a>
                <a href="Petforadoption.php" class="nav-item nav-link">adoption</a>
                <a href="Events.php" class="nav-item nav-link">Events</a>
                <button class="my-Button" data-bs-target="#SignIn" data-bs-toggle="modal">Login</button>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Login -->
    <?php include 'login.php';?>
    <!-- Login end -->



    <!-- Services Start -->
   <div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-0">Our Services</h1>
        </div>
        <div class="row g-5">
            
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <div>
                        <h5 class="text-uppercase mb-3">Adoption Form</h5>
                        <p>Fill out the form to adopt</p>
                        <a class="text-primary text-uppercase" href="services/Adoption.php">Adoption form<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <div>
                        <h5 class="text-uppercase mb-3">Schedule form</h5>
                        <p>Application form for Vaccination and Kapon</p>
                        <a class="text-primary text-uppercase" href="services/schedule.php">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Rescue</h5>
                        <p>Send a rescue form</p>
                        <a class="text-primary text-uppercase" href="services/Rescue.php">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    </div>
    <!-- Services End -->
 

    <!-- Petneeds Start -->
    <!-- Need to be editable in admin side -->
    <div id="Petneeds" class="carousel slide"  data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <div class="Pet-needs text-center">
                    <h2>DONATIONS FOR RESCUED DOGS</h2>
                            <li>Dog food (kibble and canned)</li>
                            <li>Crates, carriers or cages</li>
                            <li>Pet diapers and pee pads</li>
                            <li>Chew toys for the dogs</li>
                            <li>Vaccines, medicine and vitamins</li>
                            <li>Dog treats</li>
                            <li>Leashes, harnesses and collars</li>
                </div>
            </div>
                <div class="carousel-item">
                    <div class="Pet-needs text-center">
                        <h2>SHELTER WISH LIST</h2>       
                            <li>Detergent powder and bleach</li>
                            <li>Dishwashing paste or liquid</li>
                            <li>Bath towels</li>
                            <li>Garbage bags (XXL)</li>
                            <li>Foot rugs or door mats</li>
                            <li>Clinic supplies (alcohol, cotton, etc.)</li>
                            <li>Old newspapers</li>
                            <li>Toilet paper</li>
                            <li>Mops and brooms</li>
                    </div>
                </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#Petneeds" data-bs-slide="prev">
            <span class="carousel-control-prev-icon btn-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#Petneeds" data-bs-slide="next">
            <span class="carousel-control-next-icon btn-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
    <!-- Pet needs End -->


    <!-- Footer Start -->
    <div class="footer container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>AgriCoop Building, Baliwag Government Complex, DRT Highway, Baliuag, Philippines</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>baliwag.gov.ph</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>0923 304 7360</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-body mb-2" href="service.php"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-body mb-2" href="Petforadoption.php"><i class="bi bi-arrow-right text-primary me-2"></i>Pet for adoption</a>
                        <a class="text-body" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>                   
                    </div>
                    </div>
               
            </div>
        </div>
    </div>  
    <!-- Footer End -->
    
           <!-- The core Firebase JS SDK is always required and must be listed first -->
           <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
            https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script> 

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  
  <!-- Template Javascript --> 
    <script src="js/main.js"></script>
</body>
