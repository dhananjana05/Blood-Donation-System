<!-- update-form.blade.php -->
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Update Profile</title>

    <link rel="stylesheet" href="\bootstrap-5.0.2-dist\css\bootstrap.css">
    
    
</head>
<body>

<div class="container">
    <div class="main">
        <h1>Update Profile</h1>

        <form action="{{ route('update.process', $result->id) }}" method="post" enctype="multipart/form" onsubmit="return validateForm()">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" value="{{ $result->fname }}">
            </div>

            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" value="{{ $result->lname }}">
            </div>

            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{ $result->dob }}">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male" {{ $result->gender === 'Male' ? 'checked' : '' }}>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female" {{ $result->gender === 'Female' ? 'checked' : '' }}>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" id="age" name="age" value="{{ $result->age }}">
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Weight</label>
                <input type="text" class="form-control" id="weight" name="weight" value="{{ $result->weight }}">
            </div>

            <div class="mb-3">
                <label for="height" class="form-label">Height</label>
                <input type="text" class="form-control" id="height" name="height" value="{{ $result->height }}">
            </div>

            <div class="mb-3">
                <label for="Dlisence" class="form-label">ID Card or Driving Licence</label>
                <input type="text" class="form-control" id="Dlisence" name="Dlisence" value="{{ $result->Dlisence }}">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $result->address }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $result->email }}">
            </div>

            
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
</div>


</body>
</html>
@endsection
