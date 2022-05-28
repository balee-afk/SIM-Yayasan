<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background: #3498DB;
        }

        .home-container {
            height: 100vh;
            position: relative;
            display: grid;
        }

        .home-card {
            background: #E5E5E5;
            width: 90%;
            min-height: 80%;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 60px;
        }

        .home-card-item {
            padding: 10px;
        }

        #card-l {
            width: 70%;
            padding: 10px;
        }

        #card-r {
            padding: 10px;
            margin-right: 40px;
        }

        #logo-wk {
            height: 101.37px;
        }

        #icon-1 {
            height: 327px;
        }

        .head-card p {
            margin-left: 20px;
        }

        .title-selamat-datang {
            font-size: 37px;

        }

        .title-aplikasi-sim-yayasan {
            font-size: 40px;

        }

        .desc-sim-yayasan {
            font-size: 18px;
            color: #929292;
            margin-bottom: 33px;
            margin-top: 10px;
        }

        .btn-regis,
        .btn-masuk {
            min-width: 200px;
            height: 58px;
            font-size: 25px;
        }

        .btn-masuk {
            background: #3498DB;
            color: white;
        }

        .btn-regis {
            background: #F7B924;
            color: white;
        }

        .button {
            margin-top: 50px;
        }


        @media screen and (max-width: 1200px) {
            #card-r {
                display: none;

            }
        }

        @media screen and (max-width: 580px) {

            .title-selamat-datang {
                font-size: 24px;
            }

            #logo-wk {
                height: 80px;
            }

            .title-aplikasi-sim-yayasan {
                font-size: 28px;
            }
            .desc-sim-yayasan{
                font-size: 14px;
                width: 90%;
                padding: 10px;
            }

            .btn-regis,
            .btn-masuk {
                min-width: 100px;
                height: 58px;
                font-size: 20px;
            }
            .sm-card{
                width: 90%;
            }
        }
        @media screen and (max-width: 400px) {
            .btn-regis,
            .btn-masuk {
                width: 70px;
                height: 58px;
                font-size: 18px;
            }
            .home-card {

            border-radius: 30px;
        }

    }
    </style>
</head>

<body>
    <!--
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
     -->
    <div class="container-fluid  home-container d-flex justify-content-center align-items-center">
        <div class="home-card ">
            <div id="card-l ">
                <div class="col-md-9 col-sm-9 sm-card m-auto">
                    <div class="d-flex head-card">
                        <img src="img/logo-wk.png" id="logo-wk">
                        <p class="mt-auto title-selamat-datang">Selamat Datang</p>
                    </div>
                    <b class="title-aplikasi-sim-yayasan">Aplikasi SIM Yayasan</b>
                    <p class="desc-sim-yayasan">SIM Yayasan - Admin / Karyawan merupakan aplikasi
                        induk dalam manajemen yayasan SMK Wikrama Bogor.</p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="">
                                <input placeholder="EMAIL" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="">
                                <input placeholder="PASSWORD" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="button d-flex  flex-column">
                            <div class="d-flex justify-content-around">
                                <div class="d-flex flex-column">
                                    <button type="submit" class="btn btn-masuk">
                                        {{ __('MASUK') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                    <a class="link  " href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>

                                <button href="{{ url('/absen') }}" class="btn btn-regis">ABSEN</button>

                            </div>


                        </div>

                    </form>
                </div>
            </div>

            <div id="card-r">
                <img src="img/icon-1.png" id="icon-1">
            </div>
        </div>
    </div>
</body>

</html>
