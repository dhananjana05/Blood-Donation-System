

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







   
    .space{
        margin-top: 10px;

    }
    .space1{

        margin-left: 20px;
        padding-left: 20px;
    }
    .space2{

 margin-left: 20px;
 padding-left: 380px;
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






body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .form-container {
            background-color: #ffffff;
            padding: 40px;
            margin-left:300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }

        .form-group {
            margin-bottom: 20px;
            
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .checkbox-group {
            margin-top: 10px;
            margin-left:20px;
        }

        .submit-btn {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 15px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }







    </style>


         
  </head>
  <body>


  
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
                <a class="nav-link " aria-current="page" href="{{route('profile')}}">Donor</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" href="">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Hospital</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('setting')}}">Settings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Account</a>
              </li>
              <li class="nav-item">
                
              </li>
           

            <div class="space2">
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">{{auth()->user()->name}}</a>
              </li>
            </div>

            <div class="space1">
              <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}" tabindex="-1" aria-disabled="true">Logout</a>
              </li>
            </div>
            </ul>
          </div>
        </div>
      </nav>

    

   
<div class="container">
 <div class="main">
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" method="get"  action="{{ route('details.check') }}">
    @csrf
      <input class="form-control me-2" name="query" type="search" id="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>


<table class="table">
  <thead>
    <tr>
    <th scope="col">donorid</th>
      <th scope="col">bloodGroup</th>
      <th scope="col">donationType</th>
      <th scope="col">lastDonationDate</th>
      <th scope="col">donationFrequency</th>
      <th scope="col">preferredLocation</th>
      <th scope="col">weight</th>
      <th scope="col">medicalConditions</th>
      <th scope="col">medications</th>
      <th scope="col">allergies</th>
      <th scope="col">travelHistory</th>
      <th scope="col">vaccinationStatus</th>

    </tr>
    </tr>
  </thead>
  <tbody id="content">

  @if ($results->isEmpty())

         <tr>
            <td colspan="11">No results found.</td>
        </tr>
        @else
        @foreach ($results as $result)
            <tr>
        <th scope="row">{{  $result->donorid }}</th>
        <td>{{ $result->bloodGroup }}</td>
        <td>{{ $result->donationType }}</td>
        <td>{{ $result->lastDonationDate }}</td>
        <td>{{ $result->donationFrequency }}</td>
        <td>{{ $result->preferredLocation }}</td>
        <td>{{ $result->weight }}</td>
        <td>{{ $result->medicalConditions }}</td>
        <td>{{ $result->medications }}</td>
        <td>{{ $result->allergies }}</td>
        <td>{{ $result->travelHistory }}</td>
        <td>{{ $result->vaccinationStatus }}</td>

        
        </tr>
        @endforeach
    @endif
  </tbody>
</table>







<tbody id="content">
    @foreach ($results as $result)
        @php
            $lastDonationDate = \Carbon\Carbon::parse($result->lastDonationDate);
            $sixMonthsAgo = \Carbon\Carbon::now()->subMonths(6);
            $isSixMonthsPassed = $lastDonationDate->lte($sixMonthsAgo);
        @endphp
        <tr>
            <th scope="row">{{ $result->donorid }}</th>
            <td>{{ $result->bloodGroup }}</td>
          
            <td>
                @if($isSixMonthsPassed)
                    {{ $lastDonationDate->format('Y-m-d') }}

                    <div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
  Last donation date is more than 6 months ago
  </div>
</div>
















      
<div class="form-container">
        <h2>Blood Donation Form</h2>
        <form action="{{ route('details.store') }}" method="post" enctype="multipart/form">

        @csrf

           
            <div class="form-group">
                <label for="fullName">ID:</label>
                <input type="text" id="id" name="donorid" required>
            </div>

           

            

            
            <h3>Blood Donation Information:</h3>
            <div class="form-group">
                <label for="bloodGroup">Blood Group:</label>
                <select  name="bloodGroup" required>
                    <option value="">Select Blood Group</option>
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

            <div class="form-group">
                <label for="donationType">Donation Type:</label>
                <select  name="donationType" required>
                    <option value="">Select Donation Type</option>
                    <option value="wholeBlood">Whole Blood</option>
                    <option value="plasma">Plasma</option>
                    <option value="platelets">Platelets</option>
                </select>
            </div>

            <div class="form-group">
                <label for="lastDonationDate">Last Donation Date:</label>
                <input type="date"  name="lastDonationDate" required>
            </div>

            <div class="form-group">
                <label for="donationFrequency">Donation Frequency:</label>
                <select  name="donationFrequency" required>
                    <option value="">Select Donation Frequency</option>
                    <option value="regular">Regular</option>
                    <option value="occasional">Occasional</option>
                    <option value="firstTime">First Time Donor</option>
                </select>
            </div>

            <div class="form-group">
                <label for="preferredLocation">Preferred Donation Location:</label>
                <input type="text"  name="preferredLocation">
            </div>

           
            <h3>Health Information:</h3>
            <div class="form-group">
                <label for="weight">Weight (in kg):</label>
                <input type="number" name="weight" required>
            </div>

            <div class="form-group">
                <label for="medicalConditions">Medical Conditions:</label>
                <input type="text"  name="medicalConditions">
            </div>

            <div class="form-group">
                <label for="medications">Current Medications:</label>
                <input type="text"  name="medications">
            </div>

            <div class="form-group">
                <label for="allergies">Allergies:</label>
                <input type="text"  name="allergies">
            </div>

            <div class="form-group">
                <label for="travelHistory">Travel History:</label>
                <textarea  name="travelHistory" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="vaccinationStatus">COVID-19 Vaccination Status:</label>
                <select  name="vaccinationStatus">
                    <option value="fullyVaccinated">Fully Vaccinated</option>
                    <option value="partiallyVaccinated">Partially Vaccinated</option>
                    <option value="notVaccinated">Not Vaccinated</option>
                </select>
            </div>
            <button class="submit-btn">submit</button> 
        </div>

          

         </form>



















                @else
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill"/>
                        </svg>
                        <div>
                            Last donation date is less than 6 months ago
                        </div>
                    </div>
                @endif
            </td>
        </tr>
    @endforeach
</tbody>


</div>
</div>





  </body>
</html>





