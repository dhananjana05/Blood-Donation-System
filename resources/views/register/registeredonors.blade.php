<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <style>
    .space{
        margin-top: 10px;

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
          <div class="navbar-brand" href="#">Registration Table</div>
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
 

<div class="space3">

 <table class="table table table-primary table-striped  table-hover" >
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">DOB</th>
        <th scope="col">gender</th>
        <th scope="col">age</th>
        <th scope="col">weight</th>
        <th scope="col">height</th>
        <th scope="col">Dlisence</th>
        <th scope="col">address</th>
        <th scope="col">email</th>

        
      </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $key => $task)
        <tr>
            <th scope="row">{{ $task->id }}</th>
            <td>{{ $task->fname }}</td>
            <td>{{ $task->lname }}</td>
            <td>{{ $task->dob }}</td>
            <td>{{ $task->gender }}</td>
            <td>{{ $task->age }}</td>
            <td>{{ $task->weight }}</td>
            <td>{{ $task->height }}</td>
            <td>{{ $task->Dlisence }}</td>
            <td>{{ $task->address }}</td>
            <td>{{ $task->email }}</td>
        </tr>
    @endforeach
        
        
       </tbody>
     </table>
</div>



</div>
</div>




</body>
</html>