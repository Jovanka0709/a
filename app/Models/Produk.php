<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = "produk";

    public function Kategori(){
        return $this->belongsTo(Kategori::class,'kategori_id');
    }

    public function Transaksi_Produk(){
        return $this->hasmany(Transaksi_Produk::class);
    }
}
