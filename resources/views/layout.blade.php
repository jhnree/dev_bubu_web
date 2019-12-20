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
    <div class="container-fluid px-0">
        <div id="content">
            <div class="sidenav shadow p-0">
                <div class="header-container container-fluid">
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
                    <div class="">
                        <hr class="m-0">
                        <div class="search-bar mt-2">
                            <input class="form-control" type="text" placeholder="Search for people or group">
                        </div>
                    </div>
                </div>
                <div class="message-list">
                    <div class="my-3 myMessage">
                        <div class="profile">
                            <img src="{{asset('img/user-male.png')}}" alt="" srcset="">
                        </div>
                        <div class="message">
                            <div class="name">
                                <span>Mark Renz Olimberio</span>
                            </div>
                            <div class="content">
                                <span>The standard chunk of Lorem Ipsum </span>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 myMessage">
                        <div class="profile">
                            <img src="{{asset('img/user-male.png')}}" alt="" srcset="">
                        </div>
                        <div class="message">
                            <div class="name">
                                <span>Mark Renz Olimberio</span>
                            </div>
                            <div class="content">
                                <span>The standard chunk of Lorem Ipsum </span>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 myMessage">
                        <div class="profile">
                            <img src="{{asset('img/user-male.png')}}" alt="" srcset="">
                        </div>
                        <div class="message">
                            <div class="name">
                                <span>Mark Renz Olimberio</span>
                            </div>
                            <div class="content">
                                <span>The standard chunk of Lorem Ipsum </span>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 myMessage">
                        <div class="profile">
                            <img src="{{asset('img/user-male.png')}}" alt="" srcset="">
                        </div>
                        <div class="message">
                            <div class="name">
                                <span>Mark Renz Olimberio</span>
                            </div>
                            <div class="content">
                                <span>The standard chunk of Lorem Ipsum </span>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 myMessage">
                        <div class="profile">
                            <img src="{{asset('img/user-male.png')}}" alt="" srcset="">
                        </div>
                        <div class="message">
                            <div class="name">
                                <span>Mark Renz Olimberio</span>
                            </div>
                            <div class="content">
                                <span>The standard chunk of Lorem Ipsum </span>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 myMessage">
                        <div class="profile">
                            <img src="{{asset('img/user-male.png')}}" alt="" srcset="">
                        </div>
                        <div class="message">
                            <div class="name">
                                <span>Mark Renz Olimberio</span>
                            </div>
                            <div class="content">
                                <span>The standard chunk of Lorem Ipsum </span>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 myMessage">
                        <div class="profile">
                            <img src="{{asset('img/user-female.png')}}" alt="" srcset="">
                        </div>
                        <div class="message">
                            <div class="name">
                                <span>Angelica Mae Samson</span>
                            </div>
                            <div class="content">
                                <span>The standard chunk of Lorem Ipsum </span>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 myMessage"> 
                        <div class="profile">
                            <img src="{{asset('img/user-female.png')}}" alt="" srcset="">
                        </div>
                        <div class="message">
                            <div class="name">
                                <span>Angelica Mae Samson</span>
                            </div>
                            <div class="content">
                                <span>The standard chunk of Lorem Ipsum </span>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 myMessage">
                        <div class="profile">
                            <img src="{{asset('img/user-female.png')}}" alt="" srcset="">
                        </div>
                        <div class="message">
                            <div class="name">
                                <span>Angelica Mae Samson</span>
                            </div>
                            <div class="content">
                                <span>The standard chunk of Lorem Ipsum </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-sm-block main">
                <div class="conversation-head pt-2">
                    <div class="row">
                        <div class="col-9">
                            <div class="name text-center">
                                <span>Mark Renz Olimberio</span><br>
                            </div>
                            <div class="status text-center">
                                <span>Active Now</span>
                            </div>
                        </div>
                        <div class="col-3 text-center">
                            <button class="btn">
                                <img src="{{asset('img/call-update.png')}}" width="17px">
                            </button>
                            <button class="btn">
                                <img src="{{asset('img/videocall.png')}}" width="17px">
                            </button>
                            <button class="btn">
                                <img src="{{asset('img/info.png')}}" width="17px">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="user-profile-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    @extends('Home.userprofile')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
