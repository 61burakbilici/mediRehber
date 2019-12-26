<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePozisyonlarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pozisyonlars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('pozisyon')->nullable();
            $table->text('hastane_id')->nullable();
            $table->text('ekleyen_id')->nullable();
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
        Schema::dropIfExists('pozisyonlars');
    }
}
