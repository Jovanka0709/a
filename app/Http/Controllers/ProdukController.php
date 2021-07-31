<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Support\Facades\File;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::with('Kategori')->get();
        $kategori = Kategori::all();
        return view('admin/produk', compact(
            'produk', 'kategori'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Produk;
        $model->nama_produk = $request->nama_produk;
        $model->kategori_id = $request->kategori;
        $model->deskripsi = $request->deskripsi;
        $model->harga = $request->harga;

        if($request->file('gambar')){
            $file = $request->file('gambar');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('gambar', $nama_file);
            $model->gambar = $nama_file;
        }
        $model->save();
        return redirect('produk')->with('pesan', 'Create Success');
    }

    public function insertKategori(Request $request)
    {
        $model = new Kategori;
        $model->nama_kategori = $request->nama_kategori;

        if($request->file('gambar')){
            $file = $request->file('gambar');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('gambar', $nama_file);
            $model->gambar = $nama_file;
        }
        $model->save();
        return redirect('produk')->with('pesan', 'Create Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        $kategori = Kategori::all();
        return view('admin/edit', compact(
            'produk', 'kategori'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Produk::find($id);
        $model->nama_produk = $request->nama_produk;
        $model->kategori_id = $request->kategori;
        $model->deskripsi = $request->deskripsi;
        $model->harga = $request->harga;

        if($request->file('gambar')){
            $file = $request->file('gambar');
            $nama_file = time().str_replace(" ", "", $file->getClientOriginalName());
            $file->move('gambar', $nama_file);
            $model->gambar = $nama_file;
        }
        $model->save();
        return redirect('produk')->with('pesan', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $model = Produk::find($id);
        $model->delete();
        return redirect('produk')->with('pesan', 'Delete Success');
    }
}
