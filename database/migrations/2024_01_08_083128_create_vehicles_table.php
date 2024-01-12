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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer');
            $table->string('model');
            $table->year('yom');
            $table->integer('mileage');
            $table->smallInteger('engine_capacity');
            $table->string('fuel_type');
            $table->string('transmission');
            $table->string('body_style');
            $table->string('car_condition');
            $table->string('seats');
            $table->boolean('availability');
            $table->decimal('price', $precision = 11, $scale = 2);
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
        Schema::dropIfExists('vehicle_information');
    }
};
