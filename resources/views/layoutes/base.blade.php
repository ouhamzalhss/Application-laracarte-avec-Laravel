<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--        google font-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
       
        <title>{{page_title($title ?? '')}} </title>
        
      <style>
          body{
              font-family: 'Open Sans', sans-serif;
          }
          footer{
              margin: 60px auto !important;
          }
        </style>
    </head>
    <body>
               @include('layoutes/partials/_nav')
               
                @yield('content')
         
               @include('layoutes/partials/_footer')
               
    <script src="//code.jquery.com/jquery.min.js"></script>
         <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    @include('flashy::message')
   
    </body>
</html>
