<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suppliers extends Model
{
    protected $fillable = ['name','phone','address','description','supplier'];

    protected $table = 'suppliers';
}
