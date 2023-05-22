<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seafood extends Model
{
    use HasFactory;
    protected $table='seafoods';
    protected $fillable=['seafood_name', 'quantity', 'price'];
}
