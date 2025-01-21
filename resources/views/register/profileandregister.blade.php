



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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    

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
        padding-left:80px;
    
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
      <h1 class="display-4 fw-normal">Registration Blood Donor</h1>
    </div>
  </header>
<div class="cardspace">
  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"> Donor Registration</h4>
          </div>


          <div class="card-body">
           
            <ul class="list-unstyled mt-3 mb-4">
              <li>Check</li>
              <li>Donor</li>
              <li>Can Give</li>
              <li>blood</li>
            </ul>
            <a href="{{ route('reg')}}"> <button type="button" class="w-100 btn btn-lg btn-outline-primary">Donor Registration</button></a>

           
          </div>
        </div>
      </div>
      @hasrole('admin')

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"> Registration Info</h4>
          </div>
          <div class="card-body">
           
            <ul class="list-unstyled mt-3 mb-4">
              <li>Donor</li>
              <li>Registration</li>
              <li>See </li>
              <li>For Donation the boold</li>
            </ul>
            <a href="{{ route('donorprofile')}}"> <button type="button" class="w-100 btn btn-lg btn-outline-primary"  >See Donar Details</button></a>
          </div>
        </div>
     

        @endhasrole
       
     
      </div>


      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Update Info</h4>
          </div>
          <div class="card-body">
           
            <ul class="list-unstyled mt-3 mb-4">
              <li>Donor</li>
              <li>Details</li>
              <li>Update </li>
              <li>Profile Details </li>
            </ul>
            <a href= "{{ route('update')}}"> <button type="button" class="w-100 btn btn-lg btn-outline-primary">Update Donor Info</button></a>

          </div>
        </div>
      </div>




    </div>

    
    </div>


    
  </footer>
    </div>

</div>




  </body>
</html>
