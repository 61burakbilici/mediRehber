<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHastanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hastanes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('adisoyadi')->nullable();
            $table->text('dec')->nullable();
            $table->text('sabit')->nullable();
            $table->text('faks')->nullable();
            $table->text('email')->nullable();
            $table->text('bolum')->nullable();
            $table->text('not')->nullable();
            $table->string('ekleyen_id')->nullable();
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
        Schema::dropIfExists('hastanes');
    }
}
