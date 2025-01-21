<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Request Email</title>
</head>
<body>
    <h1>Blood Donation Request</h1>
    <p>Dear {{$donor->name}},</p>
    
    <p>We Want to . Details are as follows:</p>
    <ul>
        <li><strong>Address:</strong> {{$bloodRequest->address}}</li>
        <li><strong>Date:</strong> {{$bloodRequest->date}}</li>
        <li><strong>Description:</strong> {{$bloodRequest->description}}</li>
        <li><strong>Blood Type:</strong> {{$bloodRequest->bloodtype}}</li>
    </ul>

    <p>Thank you for your willingness to donate blood and save lives.</p>

    <p>Best regards,<br>
    Blood Donation System</p>
</body>
</html>
