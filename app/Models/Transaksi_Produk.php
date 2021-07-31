<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_Produk extends Model
{
    use HasFactory;
    protected $table = "transaksi_produk";

    public function Produk(){
        return $this->belongsTo(Produk::class,'produk_id');
    }

    public function Login(){
        return $this->belongsTo(Login::class,'user_id');
    }
}
