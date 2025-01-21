<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




 
<div class="space2">
  <div class="row justify-content-center">
  <div class="col-md-5">
   <div class="card">
     <h2 class="card-title text-center">Register </h2>
      <div class="card-body py-md-4">
      <form action="{{route('account.registration') }}"  method="post">
          @csrf
          <div class="form-group">
             <input type="text" class="form-control" id="name" name="name" placeholder="Role">
           </div>
          
                            
                          
   
                   <div class="d-flex flex-row align-items-center justify-content-between">
     
                                <button class="btn btn-primary">Create Account</button>
          </div>
         </form>
        </div>
     </div>
  </div>
   </div>
 </div>


 </div>
</body>
</html>