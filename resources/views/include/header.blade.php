<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css">

</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li><a href="{{ url('/about') }}" class="nav-link">About</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Service</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('service.one') }}" class="dropdown-item">Service One</a></li>
                    <li><a href="{{ route('service.two') }}" class="dropdown-item">Service Two</a></li>
                    <li><a href="{{ route('service.three') }}" class="dropdown-item">Service Three</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
