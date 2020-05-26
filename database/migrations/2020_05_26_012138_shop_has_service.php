<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ShopHasService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_has_service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id');
            $table->foreign('shop_id')
              ->references('id')
              ->on('shops');
            $table->foreignId('service_id');
            $table->foreign('service_id')
              ->references('id')
              ->on('services');
            $table->float('price');
            $table->string('stimated_time');
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
        Schema::dropIfExists('shop_has_service');
    }
}
