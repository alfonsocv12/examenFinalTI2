<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ShopServiceView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      DB::statement("
          CREATE
          ALGORITHM = UNDEFINED
          VIEW shop_serviece_view AS
          SELECT
            shs.id as id, s.name as service, ss.name as shop,
            shs.price, shs.hours, shs.minutes,
            shs.description, ss.id as shop_id
          from shop_has_service as shs
          left join shops as ss on ss.id = shs.shop_id
          left join services as s on s.id = shs.service_id
      ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS shop_serviece_view');
    }
}
