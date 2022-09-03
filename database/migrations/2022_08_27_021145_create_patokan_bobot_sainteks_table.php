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
        Schema::create('patokan_bobot_sainteks', function (Blueprint $table) {
            $table->id();
            $table->string('kriteria');
            $table->string('ti');
            $table->string('tip');
            $table->string('agro');
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
        Schema::dropIfExists('patokan_bobot_sainteks');
    }
};
