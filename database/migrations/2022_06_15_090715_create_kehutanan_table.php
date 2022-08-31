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
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('kgkehutanan_id')->nullable();
            $table->integer('miliknegara')->nullable();
            $table->integer('perhutani')->nullable();
            $table->integer('milikadat')->nullable();
            $table->integer('milikmasyarakat')->nullable();
            $table->integer('totalluashutan')->nullable();
            $table->timestamps();
        });

        Schema::table('kehutanan', function (Blueprint $table) {
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
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
