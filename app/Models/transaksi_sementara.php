<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_sementara extends Model
{
    protected $fillable = ['barcode','price','qty'];

    protected $table = 'transaksi_sementara';
}
