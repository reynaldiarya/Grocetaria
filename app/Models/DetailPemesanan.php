<?php

namespace App\Models;

use App\Models\Pemesanan;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemesanan extends Model
{
    use HasFactory;
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
