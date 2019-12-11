<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHastanelersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hastanelers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hastane_adi');
            $table->string('hastane_il');
            $table->string('hastane_ilce');
            $table->string('hastane_adres');
            $table->string('hastane_tel');
            $table->string('hastane_sira')->nullable();
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
        Schema::dropIfExists('hastanelers');
    }
}
