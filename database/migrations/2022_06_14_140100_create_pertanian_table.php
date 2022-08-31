<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->integer('pangan_kurang5ha')->nullable();
            $table->integer('pangan_5_10ha')->nullable();
            $table->integer('pangan_10_50ha')->nullable();
            $table->integer('pangan_50_100ha')->nullable();
            $table->integer('pangan_100_500ha')->nullable();
            $table->integer('pangan_500_1000ha')->nullable();
            $table->integer('pangan_lebih1000ha')->nullable();
            $table->integer('pangan_memilikilahan')->nullable();
            $table->integer('pangan_tidakmemilikilahan')->nullable();
            $table->integer('pangan_totallahan')->nullable();
            $table->integer('buah_kurang5ha')->nullable();
            $table->integer('buah_5_10ha')->nullable();
            $table->integer('buah_10_50ha')->nullable();
            $table->integer('buah_50_100ha')->nullable();
            $table->integer('buah_100_500ha')->nullable();
            $table->integer('buah_500_1000ha')->nullable();
            $table->integer('buah_lebih1000ha')->nullable();
            $table->integer('buah_memilikilahan')->nullable();
            $table->integer('buah_tidakmemilikilahan')->nullable();
            $table->integer('buah_totallahan')->nullable();
            $table->integer('kebun_kurang5ha')->nullable();
            $table->integer('kebun_5_10ha')->nullable();
            $table->integer('kebun_10_50ha')->nullable();
            $table->integer('kebun_50_100ha')->nullable();
            $table->integer('kebun_100_500ha')->nullable();
            $table->integer('kebun_500_1000ha')->nullable();
            $table->integer('kebun_lebih1000ha')->nullable();
            $table->integer('kebun_memilikilahan')->nullable();
            $table->integer('kebun_tidakmemilikilahan')->nullable();
            $table->integer('kebun_totallahan')->nullable();
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
        Schema::dropIfExists('pertanian');
    }
}
