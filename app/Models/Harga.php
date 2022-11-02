<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    use HasFactory;
    protected $guarded = ['id_harga'];
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
