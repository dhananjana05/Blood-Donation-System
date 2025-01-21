<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @include('lib.style')
    <link rel="stylesheet" href="\settingstyle.css">
    <link rel="stylesheet" href="\settingbootstrap.css">
    
</head>
<body>

    
  
@include('lib.navigationbar')


   @yield('specialbladefile')
 


   @include('lib.style')
</body>
</html>