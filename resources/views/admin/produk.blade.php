@extends('admin/index')
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
        @if (Session::has('pesan'))
            <p class="alert alert-success">{{ Session::get('pesan') }}</p>
        @endif
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertProduk">
          insert Produk
        </button>

        <div class="modal fade" id="insertProduk" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="insertProduk" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="insertProdukLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <form method="post" action="{{ route('produk.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="nama_produk" id="" class="form-control" placeholder="nama_produk"><br>

                        <input type="text" name="harga" id="" class="form-control" placeholder="harga"><br>

                        <input type="file" name="gambar" id="" class="form-control" placeholder="gambar"><br>

                        <textarea name="deskripsi" class="form-control" placeholder="deskripsi"></textarea><br>

                        <select name="kategori" id="" class="form-control">
                            <option value="">Choise</option>
                            @foreach ($kategori as $item)
                              <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endforeach
                        </select>
                        <br>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
              </div>
               
            </div>
          </div>
        </div>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertKategori">
            insert Kategori
          </button>
  
          <div class="modal fade" id="insertKategori" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="insertKategori" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="insertKategoriLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                      <form method="post" action="{{ url('produk/insertKategori') }}" enctype="multipart/form-data">
                          @csrf
                          <input type="text" name="nama_kategori" id="" class="form-control" placeholder="nama_kategori"><br>
  
                          <input type="file" name="gambar" id="" class="form-control" placeholder="gambar"><br>

                          <br>
  
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                 
              </div>
            </div>
          </div>
          <br><br>
          <table class="table table-hover">
                <tr>
                    <td>No.</td>
                    <td>Gambar</td>
                    <td>nama_produk</td>
                    <td>Harga</td>
                    <td>Edit</td>
                    <td>Hapus</td>
                </tr>
                @php
                    $i = 1;
                @endphp
                @foreach ($produk as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><img src="{{ asset('gambar/' . $item->gambar) }}" alt="" width="200px"></td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->harga }}</td>
                        <td><a href="{{ route('produk.edit' , $item->id) }}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form method="post" action="{{ route('produk.destroy' , $item->id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE" id="">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
          </table>
        
    </body>
    </html>
@endsection