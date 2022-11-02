<?php

namespace App\Models;

use App\Models\Pemesanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    protected $guarded = ['id_pengiriman'];
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
