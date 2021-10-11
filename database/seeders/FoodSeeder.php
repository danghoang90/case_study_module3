<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Integer;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $fake  = Faker\Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('menu')->insert([
                'name' => Str::random(10),
                'open_time' => date("Y-m-d H:i:s"),
                'close_time' => date("Y-m-d H:i:s"),
                'note' => Str::random(10),
                'image' => Str::random(10),
                'price' => 200,
                'promotional_price' => 100,
                'service_price' => 10,
                'explain_service_price' => Str::random(10),
                'service_price_id' => 1,
                'prepare_time' => date("Y-m-d H:i:s"),
                'discount_code' => Str::random(10),
                'count_discount_code' => Str::random(10),
                'tag' => Str::random(10),
                'views' => Str::random(10),
                'orders' => Str::random(10),
                'nominations' => Str::random(10),
                'discount_food' => Str::random(10),
                'restaurant' => Str::random(10),
            ]);
        }
    }
}
