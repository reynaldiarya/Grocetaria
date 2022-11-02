<?php

namespace App\Models;

use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mBanking extends Model
{
    use HasFactory;
    public function pembayaran()
    {
        return $this->morphOne(Pembayaran::class, 'mbanking');
    }
}
