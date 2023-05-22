<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typekamar extends Model
{
    use HasFactory;
    protected $table='typekamars';
    protected $fillable=['type_kamar', 'harga', 'deskripsi'];
}
