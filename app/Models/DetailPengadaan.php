<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\Pengadaan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPengadaan extends Model
{
    use HasFactory;
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
    public function pengadaan()
    {
        return $this->belongsTo(pengadaan::class);
    }
}
