<?php

namespace App\Models;

use App\Models\Pengiriman;
use App\Models\User;
use App\Models\DetailPemesanan;
use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $guarded = ['id_pemesanan'];
    public function pengiriman()
    {
        return $this->belongsTo(Pengiriman::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function detailpembayaran()
    {
        return $this->hasMany(DetailPemesanan::class);
    }
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }
}
