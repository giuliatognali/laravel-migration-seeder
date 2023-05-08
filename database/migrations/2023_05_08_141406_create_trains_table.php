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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->tinyInteger('departure_platform');
            $table->tinyInteger('arrival_platform');
            $table->string('company', 50);
            $table->string('train_code', 10);
            $table->tinyInteger('wagons')->default(1);
            $table->boolean('delay')->default(false);
            $table->boolean('cancel')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
