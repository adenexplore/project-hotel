<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    use HasFactory;
    protected $table='check_in';
    protected $fillable=['type_kamar','nama_tamu','jumlah_tamu','tgl_cekin','tgl_cekout','payment'];
}
