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
        Schema::create('tis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('camaba_id');
            $table->integer('matematika');
            $table->integer('fisika');
            $table->integer('kimia');
            $table->integer('biologi');
            $table->integer('kesanggupan');
            $table->integer('inggris');
            $table->integer('ujian_lisan');
            $table->integer('arab');
            $table->integer('pemikiran');
            $table->integer('pendanaan');
            $table->integer('pendidikan_terakhir');
            $table->integer('penghasilan');
            $table->integer('pilihan');
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
        Schema::dropIfExists('tis');
    }
};
