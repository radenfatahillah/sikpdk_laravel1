<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehutananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehutanan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('desa_id')->nullable();
            $table->integer('kgkehutanan_id')->nullable();
            $table->integer('miliknegara')->nullable();
            $table->integer('perhutani')->nullable();
            $table->integer('milikadat')->nullable();
            $table->integer('milikmasyarakat')->nullable();
            $table->integer('totalluashutan')->nullable();
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
        Schema::dropIfExists('kehutanan');
    }
}