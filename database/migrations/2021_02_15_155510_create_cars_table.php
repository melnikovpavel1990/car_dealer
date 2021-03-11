<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mark_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('transmission_id');
            $table->integer('year')->nullable();
            $table->unsignedBigInteger('color_id');
            $table->integer('power')->nullable();
            $table->unsignedBigInteger('fuel_id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('city_id');
            $table->integer('price')->nullable();
            $table->integer('milleage')->nullable();
            $table->string('title', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->boolean('Bluetooth')->default(false);
            $table->boolean('air_conditioning')->default(false);
            $table->boolean('GPS')->default(false);
            $table->boolean('heated_seats')->default(false);
            $table->boolean('power_seat')->default(false);
            $table->boolean('speed_control')->default(false);
            $table->boolean('ABS')->default(false);
            $table->boolean('airbag')->default(false);
            $table->boolean('alarm')->default(false);
            $table->boolean('fog_lights')->default(false);
            $table->boolean('heated_mirrors')->default(false);
            $table->boolean('tow_package')->default(false);
            $table->timestamps();
        });
        Schema::table('cars', function ($table) {
            $table->foreign('mark_id')
                ->references('id')
                ->on('car_marks');
            $table->foreign('model_id')
                ->references('id')
                ->on('car_models');
            $table->foreign('transmission_id')
                ->references('id')
                ->on('transmissions');
            $table->foreign('fuel_id')
                ->references('id')
                ->on('attr_values');
            $table->foreign('color_id')
                ->references('id')
                ->on('colors');
            $table->foreign('location_id')
                ->references('id')
                ->on('locations');
            $table->foreign('city_id')
                ->references('id')
                ->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
