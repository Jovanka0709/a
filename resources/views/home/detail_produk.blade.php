@extends('home/header')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .container-detail-produk{
                width: 80%;
                padding: 20px;
                box-sizing: border-box;
                margin: 30px auto;
            }
            .flex-detail-produk{
                width: 100%;
                display: flex;
                flex-wrap: wrap;
            }
            .img-detail{
                width: 40%;
            }
            .img-detail img{
                width: 100%;
            }
            .content-detail{
                width: 60%;
                padding: 20px;
                box-sizing: border-box;
            }
            a{
                text-decoration: none;
                padding: 10px;
                box-sizing: border-box;
                background-color: #333;
                color: aliceblue;
                border-radius: 30px;
            }
            @media(max-width:900px){
                .img-detail{
                    width: 100%;
                }
                .content-detail{
                    width: 100%;
                }
                button{
                    width: 100%;
                }

            }
        </style>
    </head>
    <body>
        <div class="container-detail-produk">
            <h3>{{ $model->nama_produk }}</h3>
            <div class="flex-detail-produk">
                <div class="img-detail">
                    <img src="{{ asset('gambar/' . $model->gambar) }}" alt="">
                </div>
                <div class="content-detail">
                    <h5>$ {{ $model->harga }}</h5>
                    <p>{{ $model->deskripsi }}</p>
                    <a href="{{ url('addtocard/' . $model->id) }}">ADD TO CARD</a>
                </div>
            </div>
        </div>
        @include('home/trend')
        @include('home/footer')
    </body>
    </html>
@endsection