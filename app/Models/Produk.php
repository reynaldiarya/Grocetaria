<?php

namespace App\Models;

use App\Models\Harga;
use App\Models\DetailPengadaan;
use App\Models\DetailPemesanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produk extends Model
{
    use HasFactory;
    protected $guarded = ['id_produk'];
    public function harga()
    {
        return $this->belongsTo(Harga::class);
    }
    public function detailpengadaan()
    {
        return $this->hasMany(DetailPengadaan::class);
    }
    public function detailpemesanan()
    {
        return $this->hasMany(DetailPemesanan::class);
    }
}
