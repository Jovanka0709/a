<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Transaksi_Produk;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(){
        $produk = Produk::all();
        $kategori = Kategori::all();
        return view('home/index', compact(
            'produk', 'kategori'
        ));
    }

    public function detail_kategori($id){
        $model = Produk::with('Kategori')->where('kategori_id', $id)->get();
        return view('home/detail_kategori',compact(
            'model'
        ));
    }

    public function detail_produk($id){
        $model = Produk::find($id);
        return view('home/detail_produk', compact(
            'model'
        ));
    }

    public function keranjang(){
        $session = Auth()->user()->id;
        $model = Transaksi_Produk::with('Produk', 'Login')->where(['user_id' => $session , 'kode_transaksi' => 'none'])->get();
        return view('home/keranjang', compact(
            'model'
        ));
    }
    
    public function checkout(){
        $session = Auth()->user()->id;
        $model = Transaksi_Produk::with('Produk', 'Login')->where('user_id', $session)->get();
        return view('home/checkout', compact(
            'model'
        ));
    }

    public function prosesCheckout(){
        $tambah = rand(100, 999);
        $session = Auth()->user()->id;
        $model = DB::table('Transaksi_Produk')->where('user_id', $session)->update(['kode_transaksi' => 'INV/'.date('Y/m/d/').$tambah]);

        return redirect('home/checkout');
    }
}

