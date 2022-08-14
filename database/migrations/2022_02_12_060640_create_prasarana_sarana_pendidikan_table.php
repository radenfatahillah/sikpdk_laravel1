<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrasaranaSaranaPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prasarana_sarana_pendidikan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id');
            $table->integer('kgprasaranasaranapendidikan_id');
            $table->integer('sewa');
            $table->integer('milik_sendiri');
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
        Schema::dropIfExists('prasarana_sarana_pendidikan');
    }
}
