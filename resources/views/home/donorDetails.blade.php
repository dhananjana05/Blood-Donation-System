<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .profile-container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-item {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    @foreach ($results as $key => $result)
        <div class="profile-container">
            <div class="profile-header">
                <h2>Donor Profile</h2>
            </div>
            <div class="profile-item">
                <span class="label">Donor ID:</span> {{ $result->donorid }}
            </div>
            <div class="profile-item">
                <span class="label">Blood Group:</span> {{ $result->bloodGroup }}
            </div>
            <div class="profile-item">
                <span class="label">Donation Type:</span> {{ $result->donationType }}
            </div>
            <div class="profile-item">
                <span class="label">Last Donation Date:</span> {{ $result->lastDonationDate }}
            </div>
            <div class="profile-item">
                <span class="label">Donation Frequency:</span> {{ $result->donationFrequency }}
            </div>
            <div class="profile-item">
                <span class="label">Preferred Location:</span> {{ $result->preferredLocation }}
            </div>
            <div class="profile-item">
                <span class="label">Weight:</span> {{ $result->weight }}
            </div>
            <div class="profile-item">
                <span class="label">Medical Conditions:</span> {{ $result->medicalConditions }}
            </div>
            <div class="profile-item">
                <span class="label">Medications:</span> {{ $result->medications }}
            </div>
            <div class="profile-item">
                <span class="label">Allergies:</span> {{ $result->allergies }}
            </div>
            <div class="profile-item">
                <span class="label">Travel History:</span> {{ $result->travelHistory }}
            </div>
            <div class="profile-item">
                <span class="label">Vaccination Status:</span> {{ $result->vaccinationStatus }}
            </div>
        </div>
    @endforeach

</body>
</html>
