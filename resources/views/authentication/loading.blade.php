<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
    margin: 0;
    height: 100vh; /* Make sure the body takes up the full viewport height */
    display: flex;
    justify-content: center;
    align-items: center;
}

.center-container {
    text-align: center; /* Optional: Center-align the content within the container */
}
    </style>
</head>
<body>
   




    <div class="center-container">
        <div class="d-flex justify-content-center text-primary">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


    <script>
        // Delay the page change by 2 seconds (2000 milliseconds)
        setTimeout(function () {
            // Redirect to another page (replace 'your_new_page.html' with the desired URL)
            window.location.href = '{{ route("dashboard.dashboard") }}';            
            // Alternatively, you can hide or manipulate content on the current page
            // Example: document.getElementById('myElementId').style.display = 'none';
        }, 2000);
    </script>
</body>
</html>
