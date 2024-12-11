<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>Smart Service Portal</title>
  <style>
    /* Add custom style for the background image cycling */
    .back-image {
      background-size: cover;
      background-position: center;
      height: 400px; /* Set the desired height */
    }
  </style>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">SSP</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" id="headerImage">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase text-danger font-weight-bold">Welcome to SSP</h1>
      <p class="font-italic">Customer's Happiness is our Aim</p>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">SSP Services</h3>
      <p>
        SSP Services is India’s leading chain of multi-brand Electronics and Electrical service
        workshops offering
        wide array of services. We focus on enhancing your uses experience by offering world-class
        Electronic
        Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care
        services to
        keep the devices fit and healthy and customers happy and smiling”.
        <!-- Further content omitted for brevity -->
      </p>
    </div>
  </div>
  <!--Introduction Section End-->
  
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
        <h4 class="mt-4">Electronic Appliances</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
        <h4 class="mt-4">Preventive Maintenance</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
        <h4 class="mt-4">Fault Repair</h4>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Customer  -->
  <div class="jumbotron bg-danger" id="Customer">
    <div class="container">
      <h2 class="text-center text-white">Happy Customers</h2>
      <div class="row mt-5">
        <!-- Customer Cards (Same as your existing code) -->
        <!-- Customer cards omitted for brevity -->
      </div>
    </div>
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <h2 class="text-center mb-4">Contact US</h2>
    <div class="row">
      <?php include('contactform.php'); ?>
      <div class="col-md-4 text-center">
        <!-- Contact details omitted for brevity -->
      </div>
    </div>
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-6">
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <!-- Social Media Icons omitted for brevity -->
        </div>
        <div class="col-md-6 text-right">
          <small> SSP &copy; 2024.</small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div>
      </div>
    </div>
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>

  <script>
    // JavaScript for rotating the background images
    const images = [
      'url("https://www.bing.com/images/search?view=detailV2&ccid=90SB0kqu&id=6232CFC894B210D4F0679D10A99001AA453F3471&thid=OIP.90SB0kqu3A1K-af7u0EUnwHaE9&mediaurl=https%3A%2F%2Fstatic-ca-cdn.eporner.com%2Fphotos%2F22759.jpg&exph=857&expw=1280&q=nude+black+pink+pussy&simid=608035471601136076&FORM=IRPRST&ck=AFD0F26417107EB566F1D78CA0093858&selectedIndex=56&itb=0&adtq=1&cw=1528&ch=738&ajaxhist=0&ajaxserp=0")', 
      'url("images/Banner1e.jpg")'
    //   'url("images/carpenter.jpg")'
    ];
    
    let currentIndex = 0;
    
    function changeBackgroundImage() {
      document.getElementById('headerImage').style.backgroundImage = images[currentIndex];
      currentIndex = (currentIndex + 1) % images.length; // Cycle through images
    }
    
    // Change image every 5 seconds (5000 ms)
    setInterval(changeBackgroundImage, 1000);

    // Initialize with the first background image
    changeBackgroundImage();
  </script>
</body>

</html>
