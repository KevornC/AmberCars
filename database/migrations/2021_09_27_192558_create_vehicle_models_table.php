<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_models', function (Blueprint $table) {
            $table->id();
            $table->string('model_name')->unique();
            $table->date('year');
            $table->string('color');
            $table->string('condition');
            $table->string('milage');
            $table->string('capacity');
            $table->string('driverside');
            $table->string('trans_type');
            $table->foreignid('vehicle_type_id')->constrained('vehicle_types');
            $table->string('Active')->default('Active');
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
        Schema::dropIfExists('vehicle_models');
    }
}
