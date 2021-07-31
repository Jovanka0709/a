<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi_Produk;

class AddtocardController extends Controller
{
    public function index($id){
        $model = new Transaksi_Produk;
        $model->produk_id = $id;
        $model->user_id = Auth()->user()->id;
        $model->jumblah = 1;
        $model->tanggal = date('Y/m/d');

        $model->kode_transaksi = "none";
        $model->save();
        return redirect('home/keranjang')->with('pesan', 'Create Success');
    }
}
