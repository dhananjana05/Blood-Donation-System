<!DOCTYPE html>
<html lang="en">

<head>


  <title>Blood Donation System</title>
  

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


 
  <link href="\bootstrap.min.css" rel="stylesheet">


  
  <link href="\homecss.css" rel="stylesheet">


</head>

<body>

  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">Blood Donation</h1>
     

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="#">About</a></li>
          <li><a class="nav-link scrollto" href="#">Services</a></li>
          <li><a class="nav-link scrollto" href="#">Doctors</a></li>
            
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('login')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Log into</span> System</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Blood Camp</h1>
      <h2>Your Lifesaving Journey Begins Here: Navigate our Blood Donation System</h2>
      <a href="{{ route('login')}}" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Blood Donation System</h3>
              <p>
                One of the key features of this Blood Donation System is its ability to send blood requests using email. When a hospital requires specific blood type, the system automatically generates an email alert to registered donors whose blood type matches the request. This swift notification system ensures that donors are informed promptly, increasing the chances of timely donations

              </p>
             
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Donor Registration</h4>
                    <p>Easy and quckly get donor details</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Blood Capacity</h4>
                    <p>Track and manage blood supply effectively.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Blood Request</h4>
                    <p>Urgent blood requests handled with speed and precision. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</body>

</html>