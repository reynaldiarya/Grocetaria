<?php

namespace App\Models;

use App\Models\Pengadaan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth\User as Authenticatable;


class Pegawai extends Authenticatable
{
    use HasFactory;
    protected $guarded = ['id_pegawai'];
    public function pengadaan()
    {
        return $this->hasMany(Pengadaan::class);
    }
}
