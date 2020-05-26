<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarOnService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id');
            $table->foreign('car_id')
              ->references('id')
              ->on('cars');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });

        Schema::create('services_list', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointment_id');
            $table->foreign('appointment_id')
              ->references('id')
              ->on('appointment');
            $table->foreignId('service_id');
            $table->foreign('service_id')
              ->references('id')
              ->on('services');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services_list');
        Schema::dropIfExists('appointment');
    }
}
