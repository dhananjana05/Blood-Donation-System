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
            <form action="{{ route('hospital.reg') }}" method="post"  enctype="multipart/form">


               @csrf
                <h4>
                  Blood Donation <span>Request</span>
                </h4>
                <div class="form-row ">
                  
                  <div class="form-group col-lg-6">
                    <label for="inputSymptoms">Address</label>
                    <input type="text" class="form-control" id="inputSymptoms" name="address" placeholder="">
                  </div>
                  
                  <div class="form-group col-lg-6">
                    <label for="inputDate">Choose Date</label>
                     <div class="input-group">
                        <input type="date" class="form-control" name="date" >
                     
                            
                         
                    </div>



                </div>
                <div class="form-row ">
                 
                 

                <div class="form-group col-lg-8">
                    <label for="inputSymptoms">Description</label>
                    <input type="text" class="form-control"  name="description" placeholder="">
                </div>

                <div class="form-group col-lg-4">
                <label for="inputDoctorName">Status</label>
                <select class="form-control wide" name="bloodtype">
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