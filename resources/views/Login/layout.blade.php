<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/Login/login.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('toastr/toastr.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free/css/all.min.css') }}"/>
    @stack('style')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{ asset('toastr/toastr.min.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12 col-lg-8 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
