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
        <h3>Register Now!</h3>
        <br>
        <form method="post" action="{{ url('auth/postregister') }}">
            @csrf
            <input type="text" name="nama_lengkap" id="" placeholder="Input Your nama_lengkap..." class="form-control"><br>
            <input type="text" name="no_hp" id="" placeholder="Input Your no_hp..." class="form-control"><br>
            <textarea name="alamat_lengkap" class="form-control" placeholder="Input Alamat"></textarea><br>
            <input type="text" name="email" id="" placeholder="Input Your Email..." class="form-control"><br>
            <input type="password" name="password" id="" placeholder="Input Your password..." class="form-control"><br>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <br>
        <center><a href="{{ url('auth') }}">Don't Have Account? <span>Register Now</span></a></center>
    </div>
</body>
</html>