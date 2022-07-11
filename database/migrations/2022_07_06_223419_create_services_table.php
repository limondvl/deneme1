<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('button')->nullable();
            $table->mediumText('kazan_sistemleri_1')->nullable();
            $table->mediumText('kazan_sistemleri_2')->nullable();
            $table->mediumText('kombi_sistemleri_1')->nullable();
            $table->mediumText('kombi_sistemleri_2')->nullable();
            $table->mediumText('klima_sistemleri_1')->nullable();
            $table->mediumText('klima_sistemleri_2')->nullable();
            $table->mediumText('havalandırma_sistemleri_1')->nullable();
            $table->mediumText('havalandırma_sistemleri_2')->nullable();
            $table->mediumText('otomasyon_sistemleri_1')->nullable();
            $table->mediumText('otomasyon_sistemleri_2')->nullable();
            $table->mediumText('yangin_korumasi_1')->nullable();
            $table->mediumText('yangin_korumasi_2')->nullable();
            $table->mediumText('yalitim_1')->nullable();
            $table->mediumText('yalitim_2')->nullable();
            $table->mediumText('ozon_sistemleri_1')->nullable();
            $table->mediumText('ozon_sistemleri_2')->nullable();
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
        Schema::dropIfExists('services');
    }
};
