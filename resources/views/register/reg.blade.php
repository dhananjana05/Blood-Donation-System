

@extends('layouts.app')


@section('content')



<!DOCTYPE html>
<html>
<head>
  <title>Form Example</title>
  <link rel="stylesheet" href="\bootstrap-5.0.2-dist\css\bootstrap.css">
  <link rel="stylesheet" href="\styles.css">





  <script>
  function validateForm() {
    var fname = document.getElementById('text1').value;
    var lname = document.getElementById('text2').value;
    var dob = document.getElementById('birthday').value;
    var gender = document.querySelector('input[name="gender"]:checked');
    var age = document.getElementById('text2').value;
    var weight = document.getElementById('text2').value;
    var height = document.getElementById('text2').value;
    var dlisence = document.getElementById('text3').value;
    var address = document.getElementById('inputAddress').value;
    var email = document.getElementById('text3').value;

    if (fname.trim() === '') {
      alert('Please enter your First Name');
      return false;
    }

    if (lname.trim() === '') {
      alert('Please enter your Last Name');
      return false;
    }

    if (dob === '') {
      alert('Please enter your Date of Birth');
      return false;
    }

    if (!gender) {
      alert('Please select your Gender');
      return false;
    }

    if (age.trim() === '') {
      alert('Please enter your Age');
      return false;
    }

    if (weight.trim() === '') {
      alert('Please enter your Weight');
      return false;
    }

    if (height.trim() === '') {
      alert('Please enter your Height');
      return false;
    }

    if (dlisence.trim() === '') {
      alert('Please enter your ID Card or Driving Licence');
      return false;
    }

    if (address.trim() === '') {
      alert('Please enter your Address');
      return false;
    }

    if (email.trim() === '') {
      alert('Please enter your Email Address');
      return false;
    }

    return true;
  }
</script>



<style>
    .space{
        margin-top: 10px;
        margin-bottom:50px;

    }
    .space1{

        margin-left: 20px;
        padding-left: 400px;
    }

    .space3{

        margin-top: 100px;
    }
  </style>





<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">











</head>
<body>



<div class="space">
<div class="container">

 <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Donor</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Hospital</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Doctors</a>
              </li>
            <div class="space1">
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Logout</a>
              </li>
            </div>
            </ul>
          </div>
        </div>
      </nav>
 



  </div>


  </div>
  </div>







<div id="main">

<div class="container">
  <form class="row g-3" action="{{ route('reg.store') }}" method="post"  enctype="multipart/form"   onsubmit="return validateForm()">
    @csrf
    <div class="col-md-6">
      <label for="fname" class="form-label">First Name</label>
      <input type="text" class="form-control" id="text1" name="fname">
    </div>

    <div class="col-md-6">
      <label for="lname" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="text2" name="lname">
    </div>
   <br>

    




    <div class="col-md-6">
      <label for="dateofbirth" class="form-label">Date of Birth</label>
      <input type="date" id="birthday" class="form-control" name="dob">
    </div>

    <div class="col-12">
      <input type="radio" id="male" name="gender" value="Male">
      <label for="male">Male</label>
      <input type="radio" id="female" name="gender" value="Female">
      <label for="female">Female</label>
    </div>

    <div class="col-md-2">
      <label for="lname" class="form-label">Age</label>
      <input type="text" class="form-control" id="text2" name="age">
    </div>

    <div class="col-md-2">
      <label for="lname" class="form-label">Weight</label>
      <input type="text" class="form-control" id="text2" name="weight">
    </div>
    

    <div class="col-md-2">
      <label for="lname" class="form-label">Height</label>
      <input type="text" class="form-control" id="text2" name="height">
    </div>
    

    <div class="col-md-7">
      <label for="idcard" class="form-label">ID Card or Driving Licence</label>
      <input type="text" class="form-control" id="text3" name="Dlisence">
    </div>

    <div class="col-12">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
    </div>

    <div class="col-md-7">
      <label for="idcard" class="form-label">Email Address</label>
      <input type="text" class="form-control" id="text3" name="email">
    </div>

    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </form>
</div>
</div>











  
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

















