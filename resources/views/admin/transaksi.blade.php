@extends('admin.index')
@section('admin-content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <div class="transaksi">
            <table class="table table-hover">
                <tr>
                    <td>No.</td>
                    <td>Gambar</td>
                    <td>Nama Product</td>
                    <td>Buyyer</td>
                    <td>Buyyer Email</td>
                    <td>Price</td>
                    <td>Jumblah</td>
                    <td>Tanggal</td>
                    <td>Kode Transaksi</td>
                </tr>
                @php
                    $i = 1;
                @endphp
                @foreach ($model as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                    <td><img src="{{ asset('gambar/' . $item->Produk->gambar) }}" width="200px" alt=""></td>
                    <td>{{$item->Produk->nama_produk }}</td>
                    <td>{{ $item->Login->nama_lengkap }}</td>
                    <td>{{ $item->Login->email }}</td>
                    <td>{{$item->Produk->harga }}</td>
                    <td>{{$item->jumblah }}</td>
                    <td>{{$item->tanggal }}</td>
                    <td>{{$item->kode_transaksi }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
    </html>
@endsection