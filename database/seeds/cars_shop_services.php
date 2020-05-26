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
            "location" => "Chihuahua"
          ],
          [
            "id" => 2,
            "name" => "Taller El trol",
            "location" => "Chihuahua"
          ]
        ];

        foreach ($shops as $shop) {
          array_push($shop, [
            "created_at" =>  date("Y-m-d H:i:s")
          ]);
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
            "name" => "Cambio de cristal delantero"
          ],
          [
            "id" => 2,
            "name" => "Cambio de cristal trasero"
          ],
          [
            "id" => 3,
            "name" => "Cambio de cristal lateral piloto"
          ],
          [
            "id" => 4,
            "name" => "Cambio de cristal lateral copiloto"
          ],
          [
            "id" => 5,
            "name" => "Paquete de frenos"
          ],
          [
            "id" => 6,
            "name" => "Afinado"
          ]
        ];

        foreach ($services as $service) {
          array_push($service, [
            "created_at" =>  date("Y-m-d H:i:s")
          ]);
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
            "description" => "Cambio de medallon delantero para carro"
          ],
          [
            "id" => 1,
            "shop_id" => 1,
            "service_id" => 1,
            "price" => 2000.00,
            "stimated_time" => "1 hora",
            "description" => "Cambio de medallon delantero para camioneta"
          ],
          [
            "id" => 1,
            "shop_id" => 2,
            "service_id" => 6,
            "price" => 2000.00,
            "stimated_time" => "1 hora",
            "description" => "Cambio de bujias, aceite. Alineado y valanceo"
          ]
        ];

        foreach ($shop_services as $shop_service) {
          array_push($shop_service, [
            "created_at" =>  date("Y-m-d H:i:s")
          ]);
          try {
            DB::table('services')
              ->insert($shop_service);
          } catch (\Exception $e){
            echo("id".$shop_service['id']." allready in \n");
          }
        }
    }
}
