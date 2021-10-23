<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = ['date','kasir','customer','qty','total','note','id_penjualan'];

    protected $table = 'transaksis';
}
