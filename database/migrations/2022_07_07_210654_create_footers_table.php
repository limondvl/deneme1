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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->mediumText('description');
            $table->string('title')->nullable();
            $table->string('menu_1')->nullable();
            $table->string('menu_2')->nullable();
            $table->string('menu_3')->nullable();
            $table->string('menu_4')->nullable();
            $table->string('menu_5')->nullable();
            $table->string('menu_6')->nullable();
            $table->string('helpful_link')->nullable();
            $table->string('name')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->string('link_title')->nullable();
            $table->string('link')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkledin')->nullable();
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
        Schema::dropIfExists('footers');
    }
};
