<?php

namespace App\Models;

use App\Models\Pemesanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $guarded = ['id_pembayaran'];
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }
    public function emoney()
    {
        return $this->morphTo(eMoney::class);
    }
    public function mbanking()
    {
        return $this->morphTo(mBanking::class);
    }
    public function tunai()
    {
        return $this->morphTo(Tunai::class);
    }

}

class eMoney extends Pembayaran
{
    use HasFactory;
    public function pembayaran()
    {
        return $this->morphOne(Pembayaran::class);
    }

}

class Pembayaran extends Model
{
    use HasFactory;
    protected $guarded = ['id_pembayaran'];
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }
    public function emoney()
    {
        return $this->morphTo(eMoney::class);
    }
    public function mbanking()
    {
        return $this->morphTo(mBanking::class);
    }
    public function tunai()
    {
        return $this->morphTo(Tunai::class);
    }

}