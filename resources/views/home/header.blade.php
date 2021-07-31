<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/home.css') }}">
    <style>
        body{
            background-color: #F7F4F2;
        }
        header{
            background-color: #F7F4F2;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            justify-content: space-around;
        }
        .dua{
            margin: -7px 0 0 0;
        }
        .dua a{
            font-size: 16px;
            text-decoration: none;
            color: black;
            margin: 0 0 0 15px;
        }
        .dua.satu{
            padding: 7px;
            box-sizing: border-box;
            color: black;
            background-color: #fff;
            border:1px solid black;
            border-radius: 15px;
            transition: .8s;
        }
        .dua.tiga{
            padding: 9px;
            box-sizing: border-box;
            color: white;
            background-color: #333;
            border-radius: 15px;
        }
        .dua.satu:hover{
            background-color: #333;
            color: white;
        }
        .bi.bi-cart{
            font-size: 28px;
        }
    </style>
</head>
<body>
    <header>
        <div class="satu">
            <h3>Jop-Store</h3>
        </div>
        <div class="dua">
            @if (Auth()->user())
                <a href="{{ url('home') }}" class="dua satu">home</a>
                <a href="{{ url('auth/logout') }}" class="dua tiga">Logout</a>
            @else
                <a href="{{ url('auth') }}" class="dua satu">Login</a>
                <a href="" class="dua tiga">Logout</a>
            @endif
            
            <a href="{{ url('home/keranjang') }}"><i class="bi bi-cart"></i></a>
        </div>
    </header>
    <script src="{{ asset('bs/js/bootstrap.bundle.min.js') }}"></script>
    @yield('content')
</body>
</html>
{{-- f$!M2P(8lJnAB*V[ --}}