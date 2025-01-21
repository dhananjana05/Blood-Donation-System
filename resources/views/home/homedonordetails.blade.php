<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error {
            color: red;
        }
    </style>

    <link rel="stylesheet" href="\bootstrap-5.0.2-dist\css\bootstrap.css">

</head>
<body>

    <h1>Registration </h1>
    <form action="{{ route('homedonordetails.registration') }}" method="POST" onsubmit="return validateForm()">
        @csrf

        <div class="mb-3 mt-3">
            <label for="exampleInputEmail1" class="form-label">Donor Id</label>
            <input type="number" name="donorid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;

            if (password !== confirmPassword) {
                alert("Password and Confirm Password do not match.");
                return false; // Prevent form submission
            } else {
                return true; // Allow form submission
            }
        }
    </script>

</body>
</html>
