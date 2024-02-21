<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    

</head>
<body>
    
    <div class="conatiner-fluid bg-dark text-white">
        <div class="container-fluid">
            <h1 class="text-center">Arduinó 2023 feladatok</h1>
        </div>
        <div class="row">
            <div class="col-2 bg-dark text-white ">
                <ul class="main_list">
                    <li><a href="{{route('fooldal')}}">Főoldal</a></li>
                    <li><a href="{{route('homerseklet')}}">Hőméséklet&Páratartalom</a></li>
                    <li><a href="{{route('legmenoseg')}}">Levegá minésége</a></li>
                    <li><a href="{{route('tavolsag')}}">Távolság</a></li>
                    <li><a href="{{route('gombnyomos_homoere_paratartalom_and_ppm')}}">Gombnyomos páratartalom, hőmérés, és legmenőség</a></li>
                    <li><a href="{{route('rgbsendtowemos')}}">RGB kapcsolás Wemos</a></li>
                </ul>
            </div>
            <div class="col-10 bg-secondary p-4">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>