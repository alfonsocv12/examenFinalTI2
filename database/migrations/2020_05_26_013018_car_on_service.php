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
        Schema::create('car_on_service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id');
            $table->foreign('car_id')
              ->references('id')
              ->on('cars');
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
        Schema::dropIfExists('car_on_service');
    }
}
