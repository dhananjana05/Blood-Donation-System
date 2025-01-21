@extends('layouts.app')


@section('content')





<div class="space">
<div class="container">

 <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <div class="container-fluid">
         
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('dashboard.dashboard')}}">Dashboard</a>
              </li>

              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">Donor</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Hospital</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Settings</a>
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














    


<section class="book_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col">
            <form action="{{ route('setting.store') }}" method="post"  enctype="multipart/form">


               @csrf
                <h4>
                  Blood Donation <span>camps</span>
                </h4>
                <div class="form-row ">
                  <div class="form-group col-lg-4">
                    <label for="inputPatientName">Place </label>
                    <input type="text" class="form-control" id="inputPatientName" name="place" placeholder="">
                  </div>
                  <div class="form-group col-lg-4">
                    <label for="inputSymptoms">Address</label>
                    <input type="text" class="form-control" id="inputSymptoms" name="address" placeholder="">
                  </div>
                  
                  <div class="form-group col-lg-4">
                    <label for="inputDate">Choose Date</label>
                     <div class="input-group">
                        <input type="date" class="form-control" name="date" >
                     
                            
                         
                    </div>



                </div>
                <div class="form-row ">
                 
                  <div class="form-group col-lg-2">
                    <label for="inputSymptoms">From</label>
                    <input type="text" class="form-control"  name="from" placeholder="">
                  </div>
                  <div class="form-group col-lg-2">
                    <label for="inputSymptoms">To</label>
                    <input type="text" class="form-control"  name="to" placeholder="">
                </div>

                <div class="form-group col-lg-4">
                    <label for="inputSymptoms">Description</label>
                    <input type="text" class="form-control"  name="description" placeholder="">
                </div>

                <div class="form-group col-lg-4">
                <label for="inputDoctorName">Status</label>
                <select class="form-control wide" name="status">
                  <option value="Pending ">Pending </option>
                  <option value="Active ">Active  </option>
                  <option value="Draft ">Draft  </option>
                </select>
              </div>
                  
                </div>
                </div>
                <div class="btn-box">
                  <button type="submit" class="btn ">Submit Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>



      <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Blood Donation Camp</h2>
                        
                    </div>

                    <table>
                        <thead>

                
                            <tr>
                                <td>Place</td>
                                <td>Address</td>
                                <td>Date</td>
                                <td>From</td>
                                <td>To</td>
                                <td>description</td>
                                <td>status</td>
                             

                                

                                
                            </tr>
                        </thead>

                        <tbody>
                        @foreach ($tasks as $key => $task)
                            <tr>
                           
                               <td>{{ $task->place }}</td>
                               <td>{{ $task->address }}</td>
                               <td>{{ $task->date }}</td>
                               <td>{{ $task->from }}</td>
                               <td>{{ $task->to }}</td>
                               <td>{{ $task->description }}</td>
                                
                               <td>
                                 @if($task->status == 'Active')
                                    <form action="{{ route('update.status', ['id' => $task->id, 'status' => 'Draft']) }}" method="post">
                                      @csrf
                                         <button type="submit" class="btn btn-warning">Draft</button>
                                       </form>
                                  @else
                                     <form action="{{ route('update.status', ['id' => $task->id, 'status' => 'Active']) }}" method="post">
                                      @csrf
                                          <button type="submit" class="btn btn-primary">Active</button>
                                      </form>
                                  @endif
                               </td>

                               
                              
                              <td> <button type="button" class="btn btn-danger">Delete</button></td>
                              

                            </tr>

                      


                            @endforeach
                        </tbody>
                    </table>
                </div>




      <section class="book_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col">
            <form action="{{ route('blood-capacity.add') }}" method="post"  enctype="multipart/form">


               @csrf
                <h4>
                  Blood  <span>Details</span>
                </h4>
                <div class="form-row ">
                <div class="form-group col-lg-6">
                    <label for="inputSymptoms">Capacity</label>
                    <input type="text" class="form-control"  name="capacity" placeholder="">
                  </div>
                  <div class="form-group col-lg-4">
                  <label for="inputDoctorName">Blood Type</label>
                <select class="form-control wide" name="blood_type">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>

                             
                </select>
                  </div>
                  
                  <div class="form-group col-lg-6">
                    <label for="inputDate">Choose Date</label>
                     <div class="input-group">
                        <input type="date" class="form-control" name="date" >
                     
                            
                         
                    </div>



                </div>
                <div class="form-row ">
                 
                  
                  <div class="form-group col-lg-2">
                   
                </div>

            

                <div class="form-group col-lg-4">
            
              </div>
                  
                </div>
                </div>
                <div class="btn-box">
                  <button type="submit" class="btn ">Submit Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>










@endsection


@push('css')

 
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






    
.details {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: 2fr 1fr;
  grid-gap: 30px;
  /* margin-top: 10px; */
}

.details .recentOrders {
  position: relative;
  display: grid;
  min-height: 500px;
  background: var(--white);
  padding: 20px;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  border-radius: 20px;
}

.details .cardHeader {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-left:100px;
}
.cardHeader h2 {
  font-weight: 600;
  color: var(--blue);
}
.cardHeader .btn {
  position: relative;
  padding: 5px 10px;
  background: var(--blue);
  text-decoration: none;
  color: var(--white);
  border-radius: 6px;
}

.details table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}
.details table thead td {
  font-weight: 600;
}
.details .recentOrders table tr {
  color: var(--black1);
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.details .recentOrders table tr:last-child {
  border-bottom: none;
}
.details .recentOrders table tbody tr:hover {
  background: var(--blue);
  color: var(--white);
}
.details .recentOrders table tr td {
  padding: 10px;
}
.details .recentOrders table tr td:last-child {
  text-align: end;
}
.details .recentOrders table tr td:nth-child(2) {
  text-align: end;
}
.details .recentOrders table tr td:nth-child(3) {
  text-align: center;
}
.status.delivered {
  padding: 2px 4px;
  background: #8de02c;
  color: var(--white);
  border-radius: 4px;
  font-size: 14px;
  font-weight: 500;
}
.status.pending {
  padding: 2px 4px;
  background: #e9b10a;
  color: var(--white);
  border-radius: 4px;
  font-size: 14px;
  font-weight: 500;
}
.status.return {
  padding: 2px 4px;
  background: #f00;
  color: var(--white);
  border-radius: 4px;
  font-size: 14px;
  font-weight: 500;
}
.status.inProgress {
  padding: 2px 4px;
  background: #1795ce;
  color: var(--white);
  border-radius: 4px;
  font-size: 14px;
  font-weight: 500;
}






  </style>

@endpush