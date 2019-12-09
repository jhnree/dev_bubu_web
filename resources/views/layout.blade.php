<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/Layout/layout.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free/css/all.min.css') }}"/>

    <script src="{{asset('js/app.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <Header class="sticky-top">
        <div>
        <img class="icon" src="{{asset('img/bubu-we-white.png')}}" alt="" srcset="">
    </div>
    </Header>
    <div class="content">
        <div class="row">
            <div class="col-sm-3 col-12 sidenav shadow px-4">
                <div class="header">
                    <div class="row">
                        <div class="col-3">
                            <button class="btn text-left">
                                <i class="fas fa-cog"></i>
                            </button>
                        </div>
                        <div class="col-6">
                            Chat
                        </div>
                        <div class="col-3 text-right">
                            <button class="btn text-left">
                                <i class="fas fa-plus-circle"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="search-bar mt-2">
                    <input class="form-control" type="text" placeholder="Search for people or group">
                </div>
                <div class="message-list">
                    <div class="my-3">
                        <div class="profile d-sm-none d-md-block">
                                <img src="{{asset('img/user-male.png')}}" alt="" srcset="">
                        </div>
                        <div class="message offset-md-3 offset-2">
                            <div class="name">
                                <span>Mark Renz Olimberio</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 d-none d-sm-block">
                asd
            </div>
        </div>
    </div>
</body>
</html>
