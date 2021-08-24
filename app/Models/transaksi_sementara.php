<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_sementara extends Model
{
    protected $fillable = ['barcode','item','price','qty','discount'];

    protected $table = 'transaksi_sementara';
}
