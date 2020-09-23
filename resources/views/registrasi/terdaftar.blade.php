<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/png" href="storage/logo.png">
        <title>SIQI</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>


        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- Icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Date Picker -->
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">                        
                <a href="#" class="nav-trigger"><span></span></a>
                <div class="navbar-header pull-left">
                    <a class="navbar-brand"></a>
    </nav>
        <div class="container">     
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center">
                        Selamat anda telah terdaftar, ikuti terus informasi pendaftaran di media sosial QI UNJ !
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
