<?php

use Illuminate\Database\Seeder;

class cars_shop_services extends Seeder
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
        ]

        foreach ($shops as $shop) {
          array_push($shop, [
            "created_at" =>  date("Y-m-d H:i:s")
          ]);
          DB::table('shops')
            ->insert($shop);
        }

        $services = [
          [
            "id" => 1,
            "name" => "Cambio de cristal delantero"
          ],
          [
            "id" => 1,
            "name" => "Cambio de cristal trasero"
          ],
          [
            "id" => 1,
            "name" => "Cambio de cristal lateral piloto"
          ],
          [
            "id" => 1,
            "name" => "Cambio de cristal lateral copiloto"
          ],
          [
            "id" => 1,
            "name" => "Paquete de frenos"
          ],
          [
            "id" => 1,
            "name" => "Afinado"
          ]
        ]
    }
}
