@extends('home/header')
@section('content')
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
            .keranjang{
                width: 80%;
                margin: 30px auto;
            }
            .keranjang a{
                margin: 0 0 0 15px;
                padding: 10px;
                box-sizing: border-box;
                background-color: #333;
                color: white;
                text-decoration: none;
                border-radius: 30px;
            }
            @media(max-width:900px){
                .keranjang{
                    overflow: auto;
                }
            }
        </style>
    </head>
    <body>
        <div class="keranjang">
            <h2>Wishlist</h2>
            <table class="table table-hover">
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Name Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Remove</th>
                </tr>
                @php
                    $i = 1;
                @endphp
                @foreach ($model as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><img src="{{ asset('gambar/' . $item->Produk->gambar) }}" alt="" width="200px"></td>
                        <th>{{ $item->Produk->nama_produk }}</th>
                        <th>{{ $item->jumblah }}</th>
                        <th> $ {{ $item->Produk->harga }}</th>
                        <th><a href="{{ route('hapus.destroy' , $item->id) }}" class="btn btn-danger">Delete</a></th>
                    </tr>
                @endforeach
                
            </table>
            <br><br>
            <a href="{{ url('home/prosesCheckout') }}">CHECKOUT</a>
            <a href="{{ url('home') }}">BACK TO HOME</a>
            <br>
        </div>

        @include('home/trend')
        @include('home/footer')
    </body>
    </html>
@endsection