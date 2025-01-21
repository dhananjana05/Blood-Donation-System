@extends('layouts.apps')


@section('specialbladefile')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    

<div class="container">
  

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
          <div class="form-group">
             <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            
                          
            <div class="form-group">
             <input type="password" class="form-control" id="password" name="password" placeholder="Password">
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

</div>

<div class="space">

<div class="container">




       
      <table class="table table-striped border-primary">

        <thead>
            <tr>
                <td>Id</td>
                <td>Role</td>
                <td>Email</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as  $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->email }}</td>
                <td><a href="{{ route('account.delete',$task->id) }}" class="btn btn-danger" >delete</a></td>
                <td><a href="javascript:void(0)" class="btn btn-success update-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-user-id="{{ $task->id }}">Update</a></td>

              </tr>
            @endforeach
        </tbody>
  
     </table>

</div>
 
</div>



<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="content">
            



      <form id="updateRoleForm" method="post" action="{{ route('account.update', $task->id) }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="role" class="form-label">New Role</label>
                        <input type="text" class="form-control" id="role" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Role</button>
                </form>
      </div>
     
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    $('.update-button').click(function() {
        var id = $(this).data('user-id');
        console.log(id); // Check if the correct ID is logged in the console
        $('#updateRoleForm').attr('action', "{{ url('/')}}/dashboard/account/" + id + "/update");
    });
});


</script>




</body>
</html>







@endsection











 



@push('css')


<style>

  @import url('https://fonts.googleapis.com/css?family=PT+Sans');

body{
  background: #fff;
  font-family: 'PT Sans', sans-serif;
}
h2{
  padding-top: 1.5rem;
}
a{
  color: #333;
}
a:hover{
  color: #da5767;
  text-decoration: none;
}
.card{
  border: 0.40rem solid #f8f9fa;
  top: 10%;
}
.form-control{
  background-color: #f8f9fa;
  padding: 20px;
  padding: 25px 15px;
  margin-bottom: 1.3rem;
}

.form-control:focus {

    color: #000000;
    background-color: #ffffff;
    border: 3px solid #da5767;
    outline: 0;
    box-shadow: none;

}

.btn{
  padding: 0.6rem 1.2rem;
}
.btn-primary:hover {

    
    background-color: #df8c96;
  transition: .3s;

}

.space{

    margin:20px;
    padding-top:200x;
    width:800px;
    padding-left:100px;
    
}


.space2{

    padding-bottom:100px;
}
</style>

@endpush