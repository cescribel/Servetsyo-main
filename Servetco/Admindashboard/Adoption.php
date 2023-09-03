<?php
require '../phpconfig/dogs.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Dog Details</title>
	  <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet"  href="design.css">
</head>
<body>

    <div class="sidenav">
      <a class="head-dash" href="Dashboard.php"> <h2>Dashboard</h2> </a>
      <a href="Appointment.php"><i class="Appointment"></i>Appointment</a>
	    <a href="DogCatching.php"><i class="DogCatching"></i>Dog Catching</a>
      <a href="Dogs_in_pound.php"><i class="Dogs"></i>Dogs in Pound</a>      
	    <a href="Adoption.php" class="active"><i class="Animals Active"></i>Adoption</a>
      <a href="AnimalRescue.php"><i class="AnimalRes"></i>Animal Rescue</a>
      <a href="Users.php"><i class="users"></i>Users</a>
      <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
    </div>

    <div class="main">
        <div class="header">
          <h1>Upload Dogs for adoption</h1>
        </div>
      <!-- Body design -->
      
      <!-- Upload dog for adoption -->

	  		<span class="border">
				<div class="card" >
        
				<form class="img_prv" enctype="multipart/form-data" method="POST"  autocomplete="off">
         <div>

        <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
            <div class="image-preview">
              <img src="../img/adoption.jpg" alt="Upload Dog Picture" id="image-preview">
              <a href="#" id="choose-file-btn">Choose File</a>
            </div>
          </div>

				<div class="card-body">
        <div class="Details">
            <textarea rows="4" cols="23" id="message" name="DogInfo" placeholder="Additional details"></textarea>
			  </div>
				<div class="Details">
				  <input type="text" name="Name" placeholder="Name"  required>
				</div>
				<div class="Details">
			  	<input type="text" name="Age" placeholder="Age"  required>
				</div>
				<div class="Details">
			  	<input type="text" name="Gender" placeholder="Gender"  required>
				</div>
			  	<input type="submit" name="submit" value="Upload">
				</div>
      </form>

				</div>
        
			</span>
      <!-- Upload dog for adoption end -->

      
    <span class="border">
      <div class="Dog-details">
      <?php
      $i = 1;
      $rows = mysqli_query($con, "SELECT * FROM dogs ORDER BY id DESC")
      ?>
      <?php foreach ($rows as $row) : ?>
        
        <div class="Dog-details">
                  <div class="image-preview">
                    <img src="img/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>">
                  </div>
                  <div class="Details">
                    <h2><?php echo $row["Name"] ?></h2>
                    <p><?php echo $row["Gender"] ?></p>                   
                    <p><?php echo $row["Age"] ?></p>                                    
                    <p><?php echo $row["DogInfo"] ?></p>                   
                  </div>
              </div>

      <?php endforeach; ?>
      </div>   
    </span>


    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

	<script src="Image.js"></script>
</body>
</html>
