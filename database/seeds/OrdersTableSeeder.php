<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i <10; $i++)
        {
            DB::table('orders')->insert([
                'room_id' => $faker->numberBetween(1,17),
                'begin' => $faker->date('Y-m-d','2016-11-1'),
                'end' => $faker->date('Y-m-d','2017-1-1'),
                'user_id' => 1,
                'status' => 0,
            ]);
        }
    }
}
