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
    public function up() // this is work in added data or inserted data
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string("body")->after("title");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // this is work in deleted data
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn("body");
        });
    }
};
