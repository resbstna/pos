<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    protected $fillable = ['barcode','name','category','unit','price','stock','supplier'];

    protected $table = 'items';
}
