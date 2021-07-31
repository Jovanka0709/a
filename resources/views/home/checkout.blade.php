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
            .container-checkout{
                width: 80%;
                margin: 30px auto;
                padding: 20px;
                box-sizing: border-box;
            }
            .container-checkout h2{
                font-size: 45px;
                font-weight: bold;
            }
            .judul-checkout{
                background-color: #333;
                color: white;
                padding: 20px;
                box-sizing: border-box;
            }
            .content-checkout{
                padding: 20px;
                box-sizing: border-box;
                border: 1px solid grey;
            }
            .total{
                width: 50%;
                padding: 20px;
                box-sizing: border-box;
                background-color: #333;
                color: white;
                float: right;
                display: flex;
                justify-content: space-around
            }
            .container-checkout a{
                margin: 0 0 0 15px;
                padding: 10px;
                box-sizing: border-box;
                background-color: #333;
                color: white;
                text-decoration: none;
                border-radius: 30px;
                float: right;
            }
            @media(max-width:900px){
                .total{
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
        <div class="container-checkout">
            <h2>Thank You</h2>
            <p>Your order has been received</p>
            <div class="box-checkout">
                <div class="judul-checkout">
                    <h3>Summary Order(1 Invoce)</h3>
                </div>
                <div class="content-checkout">
                    <p>Date : {{ $model->first()->tanggal }}</p>
                    <p>Code Transaction : {{ $model->first()->kode_transaksi }}</p>
                    <p>List Order :
                        @foreach ($model as $item)
                        <ul>
                            <li>{{ $model->first()->Produk->nama_produk }}</li>
                        </ul>
                        @endforeach
                    </p>
                </div>
            </div>
            <br><br>
            <div class="total">
                <h5>SUB TOTARL ORDER :</h5>
                <h5>{{ $model->first()->Produk->harga + $model->last()->Produk->harga }}</h5>
            </div>
            <br><br><br><br>
            <a href="{{ url('home') }}">BACK TO HOME</a>
        </div>
        <br><br>
        @include('home/trend')
        @include('home/footer')
    </body>
    </html>
@endsection