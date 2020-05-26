<?php

use Illuminate\Database\Seeder;

class CarShopServices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = [
          [
            "id" => 1,
            "name" => "Cristales Vega",
            "location" => "Chihuahua",
            "created_at" =>  date("Y-m-d H:i:s")
          ],
          [
            "id" => 2,
            "name" => "Taller El trol",
            "location" => "Chihuahua",
            "created_at" =>  date("Y-m-d H:i:s")
          ]
        ];

        foreach ($shops as $shop) {
          try {
            DB::table('shops')
              ->insert($shop);
          } catch (\Exception $e) {
            echo("id".$shop['id']." allready in \n");
          }
        }

        $services = [
          [
            "id" => 1,
            "name" => "Cambio de cristal delantero",
            "created_at" =>  date("Y-m-d H:i:s")
          ],
          [
            "id" => 2,
            "name" => "Cambio de cristal trasero",
            "created_at" =>  date("Y-m-d H:i:s")
          ],
          [
            "id" => 3,
            "name" => "Cambio de cristal lateral piloto",
            "created_at" =>  date("Y-m-d H:i:s")
          ],
          [
            "id" => 4,
            "name" => "Cambio de cristal lateral copiloto",
            "created_at" =>  date("Y-m-d H:i:s")
          ],
          [
            "id" => 5,
            "name" => "Paquete de frenos",
            "created_at" =>  date("Y-m-d H:i:s")
          ],
          [
            "id" => 6,
            "name" => "Afinado",
            "created_at" =>  date("Y-m-d H:i:s")
          ]
        ];

        foreach ($services as $service) {
          try {
            DB::table('services')
              ->insert($service);
          } catch (\Exception $e){
            echo("id".$service['id']." allready in \n");
          }
        }

        $shop_services = [
          [
            "id" => 1,
            "shop_id" => 1,
            "service_id" => 1,
            "price" => 2000.00,
            "stimated_time" => "1 hora",
            "description" => "Cambio de medallon delantero para carro",
            "created_at" =>  date("Y-m-d H:i:s")
          ],
          [
            "id" => 2,
            "shop_id" => 1,
            "service_id" => 1,
            "price" => 3000.00,
            "stimated_time" => "hora y media",
            "description" => "Cambio de medallon delantero para camioneta",
            "created_at" =>  date("Y-m-d H:i:s")
          ],
          [
            "id" => 3,
            "shop_id" => 2,
            "service_id" => 6,
            "price" => 2565.00,
            "stimated_time" => "3 horas",
            "description" => "Cambio de bujias, aceite. Alineado y valanceo",
            "created_at" =>  date("Y-m-d H:i:s")
          ]
        ];

        foreach ($shop_services as $shop_service) {
          try {
            DB::table('shop_has_service')
              ->insert($shop_service);
          } catch (\Exception $e){
            echo("id".$shop_service['id']." allready in \n");
          }
        }
    }
}
