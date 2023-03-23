<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('type_kamar');
            $table->string('nama_tamu');
            $table->string('jumlah_tamu');
            $table->date('tgl_cekin');
            $table->date('tgl_cekout');
            $table->string('payment');
            $table->string('makanan');
            $table->string('minuman');
            $table->string('seafood');
            $table->string('laundry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
