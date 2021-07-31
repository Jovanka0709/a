<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <title>Document</title>
    <style>
        body{
            background-color: #F7F4F2;
        }
        .container-login{
            width: 80%;
            padding: 20px;
            box-sizing: border-box;
            background-color: #fff;
            box-shadow: 2px 2px 5px grey;
            margin: 30px auto;
            border-radius: 15px;
        }
        button{
            width: 100%;
        }
        a{
            text-decoration: none;
            color: #333;
        }
        a span{
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container-login">
        @if (Session::has('pesan'))
            <p class="alert alert-success">{{ Session::get('pesan') }}</p>
        @endif
        <h3>LOGIN NOW!</h3>
        <br>
        <form method="post" action="{{ url('auth/postlogin') }}">
            @csrf
            <input type="text" name="email" id="" placeholder="Input Your Email..." class="form-control"><br>
            <input type="password" name="password" id="" placeholder="Input Your Password..." br    class="form-control">
            <br>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <br>
        <center><a href="{{ url('auth/register') }}">Don't Have Account? <span>Register Now</span></a></center>
    </div>
</body>
</html>