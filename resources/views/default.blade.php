<!DOCTYPE html>
<html>
<head>
    <title>Creative Market Multi-Step Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: url("../images/bg-pattern.png");
            height: 90vh;
        }
    </style>
</head>
<body >
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('images/logo.png') }}" width="30" height="30" alt="">
        </a>
      </nav>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">@yield('content')</div>
    
</div>
     
</body>
  
</html>