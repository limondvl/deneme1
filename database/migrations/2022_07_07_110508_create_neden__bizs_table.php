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
        Schema::create('neden__bizs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('name_1')->nullable();
            $table->string('name_desc_1')->nullable();
            $table->string('name_2')->nullable();
            $table->string('name_desc_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('name_desc_3')->nullable();
            $table->string('name_4')->nullable();
            $table->string('name_desc_4')->nullable();
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
        Schema::dropIfExists('neden__bizs');
    }
};
