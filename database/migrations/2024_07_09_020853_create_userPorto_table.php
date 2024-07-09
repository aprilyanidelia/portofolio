<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPortoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userPorto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('bagian')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('pdf')->nullable();
            $table->string('image')->nullable();
            $table->string('logo_skill')->nullable();
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
        Schema::dropIfExists('userPorto');
    }
}
