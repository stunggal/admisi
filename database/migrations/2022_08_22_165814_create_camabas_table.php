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
        Schema::create('camabas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('periode');
            $table->string('prodi1');
            $table->string('prodi2');
            $table->string('prodi3');
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
        Schema::dropIfExists('camabas');
    }
};
