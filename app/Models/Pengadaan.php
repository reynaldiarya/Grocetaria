<?php

namespace App\Models;

use App\Models\DetailPengadaan;
use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadaan extends Model
{
    use HasFactory;
    protected $guarded = ['id_pengadaan'];
    public function detailpengadaan()
    {
        return $this->hasMany(DetailPengadaan::class);
    }
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
