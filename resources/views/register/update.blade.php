<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Profile Update</title>

    <link rel="stylesheet" href="\bootstrap-5.0.2-dist\css\bootstrap.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <style>
   .main{
    padding-top:50px;
   }
    </style>


         
  </head>
  <body>
    

   
<div class="container">
 <div class="main">
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" method="get"  action="{{ route('update.search') }}">
    @csrf
      <input class="form-control me-2" name="query" type="search" id="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>


<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">DoB</th>
      <th scope="col">gender</th>
      <th scope="col">age</th>
      <th scope="col">weight</th>
      <th scope="col">height</th>
      <th scope="col">Dlisence</th>
      <th scope="col">address</th>
      <th scope="col">email</th>
    </tr>
    </tr>
  </thead>
  <tbody id="content">

 


  </tbody>
</table>
</div>
</div>





  </body>
</html>
