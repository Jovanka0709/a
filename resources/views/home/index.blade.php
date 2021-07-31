@extends('home.header')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <div class="container-poster">
            <div class="poster-satu">
                <img src="{{ asset('img/poster-jadi.jpeg') }}" alt="" >
            </div>
            <div class="poster-dua">
                <img src="{{ asset('img/poster4.jpg') }}" alt="" >
                <div class="text-poster">
                    <h3>Free Shipping All Over Indonesia</h3>
                </div>
            </div>
        </div>

        <div class="container-kategori">
            <h2>KATEGORI</h2>
            <br><br>
            <div class="flex-kategori">
                @foreach ($kategori as $item)
                    <div class="box-kategori">
                        <div class="tengah-kategori">
                            <a href="{{ url('home/detail_kategori/' . $item->id) }}">
                                <img src="{{ asset('gambar/' .$item->gambar) }}" alt="">
                            </a>
                            <p>{{ $item->nama_kategori }}</p>
                        </div>
                    </div>
                @endforeach
                

                
            </div>
        </div>

        <div class="container-produk">
            <h3><span>OUR</span> PRODUCT</h3>
            <br><br>
            <div class="input-produk">
                <input type="text" name="keyword" id="" class="form-control" placeholder="Search Product..">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <br>
            <div class="flex-produk">
                @foreach ($produk as $item)
                    <div class="box-produk">
                        <a href="{{ url('home/detail_produk/'. $item->id) }}">
                            <img src="{{ asset('gambar/' . $item->gambar) }}" alt="">
                        </a>
                        <h5>{{ $item->nama_produk }}</h5>
                        <p>$ {{ $item->harga }}</p>
                    </div>
                @endforeach
                

                
            </div>
        </div>
        @include('home/trend')
        @include('home/footer')
    </body>
    </html>
@endsection