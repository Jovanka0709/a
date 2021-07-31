<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_Produk;

class TransaksiController extends Controller
{
    public function index(){
        $model = Transaksi_Produk::with('Produk', 'Login')->where('kode_transaksi' ,"!=", "none" )->get();
        return view('admin/transaksi', compact(
            'model'
        ));
    }
}
