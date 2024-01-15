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
    public function up() // this function make when insert or to added data
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title", 255);
            $table->boolean("check")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // this function make when delete or drop data
    {
        Schema::dropIfExists('posts');
    }
};
