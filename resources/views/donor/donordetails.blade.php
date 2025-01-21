<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Blood Donation system</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="\bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }



      .cardspace{
        padding-left:300px;
      }
          </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4">Blood Donation</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('dashboard.dashboard')}}">Dashboard</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('profile')}}">Donor</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Hospitals</a>

        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Support</a>
        <a class="py-2 text-dark text-decoration-none" href="{{route('setting')}}">Setting</a>
      </nav>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Donor Details</h1>
    </div>
  </header>
<div class="cardspace">
  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

      
    <div class="col">
        <div class="card mb-6 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Registration</h4>
          </div>
          <div class="card-body">
           
            <ul class="list-unstyled mt-3 mb-4">
              <li>Donor</li>
              <li>Details</li>
              <li>Get </li>
              <li>For Donation the boold</li>
            </ul>
            <a href="{{route('details.page')}}"> <button type="button" class="w-100 btn btn-lg btn-outline-primary">Enter Donor Details</button></a>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-6 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Many Time</h4>
          </div>


          <div class="card-body">
           
            <ul class="list-unstyled mt-3 mb-4">
              <li>Check</li>
              <li>Donor</li>
              <li>Can Give</li>
              <li>blood</li>
            </ul>
            <a href="{{route('details.check')}}"> <button type="button" class="w-100 btn btn-lg btn-primary">Check Donor can give Blood</button> </a>

          </div>
        </div>
      </div>
     
     
      </div>
    </div>

    
    </div>
  </footer>
</div>


    
  </body>
</html>
