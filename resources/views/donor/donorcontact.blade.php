

@extends('layouts.app')


@section('content')






</head>
<body>
    
 <div class="form-container">

 <h3>Emergency Contact Information:</h3>
 <form action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data">
    @csrf    
    <div class="form-group">
    <label for="emergencyContactName">ID:</label>
    <input type="text"  name="iddonor" required>
   </div>



   <div class="form-group">
    <label for="emergencyContactName">Emergency Contact Name:</label>
    <input type="text"  name="contactName" required>
   </div>

        <div class="form-group">
    <label for="emergencyContactRelationship">Emergency Contact Relationship:</label>
    <input type="text"  name="contactRelationship" required>
       </div>

          <div class="form-group">
    <label for="emergencyContactPhone">Emergency Contact Email:</label>
    <input type="email"  name="contactEmail" required>
        </div>

         <div class="form-group">
      <label for="preferredContactMethod">Preferred Contact Method:</label>
          <select name="contactMethod" required>
        <option value="">Select Preferred Contact Method</option>
        
        <option value="email">Email</option>
        
         </select>
        </div>

       <div class="form-group">
    <label for="howHeardAbout">How did you hear about the blood donation program?</label>
    <input type="text"  name="howHeardAbout" required>
      </div>


      





   <div class="form-group">
    <input type="submit" value="Submit" class="submit-btn">
    </div>
</form>
    </div>



    @endsection




    @push('css')


    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
           
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