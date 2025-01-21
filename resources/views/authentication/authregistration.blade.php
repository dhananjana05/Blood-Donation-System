<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>




    <link rel="stylesheet" href="\bootstrap-5.0.2-dist\css\bootstrap.css">
  

</head>
<body>
  



    <h1>eefeufheufheufheufhedjfh</h1>


<form action="{{route('registrations.post') }}"method="POST">
  @csrf
<div class="mb-3 mt-3">
    <label for="name" class="form-label">Enter name</label>

    <input type="text" name="name" class="form-control" id="inputname" aria-describedby="emailHelp">
 </div>



    <div class="mb-3 mt-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>

    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
 </div>




  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>




  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






</body>
</html>






