@extends('admin.index')
@section('admin-content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .edit{
                width: 80%;
                margin:30px auto ;
            }
        </style>
    </head>
    <body>
        <div class="edit">
            <form method="post" action="{{ route('produk.update' , $produk->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PATCH" id="">
                <input type="text" name="nama_produk" id="" placeholder="Input Your nama_produk..." class="form-control" value="{{ $produk->nama_produk }}"><br>
                <input type="text" name="harga" id="" placeholder="Input Your harga..." class="form-control" value="{{ $produk->harga }}"><br>
                <textarea name="deskripsi" class="form-control" value="{{ $produk->deskripsi }}" placeholder="Input deskripsi">{{ $produk->deskripsi }}</textarea><br>
                
                <img src="{{ asset('gambar/' . $produk->gambar) }}" alt="" width="200px">
                <br>
                <input type="file" name="gambar" class="form-control" id="">
                <select name="kategori" id="" class="form-control">
                    <option value="">Choise</option>
                    @foreach ($kategori as $item)
                      <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                    @endforeach
                </select>
                <br>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>    
        </div>     
    </body>
    </html>
@endsection