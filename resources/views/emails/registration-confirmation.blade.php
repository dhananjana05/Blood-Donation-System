<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #007bff;
        }

        p {
            margin-bottom: 20px;
            color: #007bff;
        }

        /* Add style for the image */
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="{{ asset('/Blood Donation Logo.png') }}" alt="Blood Donation Logo" />
        <h1>Thank You for Registering!</h1>
        <p>Hello {{ $registration->fname }},</p>
        <p>Registration Number is {{ $registration->id }},</p>
        <p>Thank you for Your Blood Donation.</p>
    </div>
</body>

</html>
