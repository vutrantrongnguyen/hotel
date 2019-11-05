<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        //      'type_id', 'name', 'description', 'price', 'available','total'
        for ($i = 0; $i <= 10; $i++)
        {
            DB::table('rooms')->insert([
                'name' => $faker->streetName,
                'type_id' => 1,
                'description' => $faker->paragraph(10,true),
                'price' => $faker->numberBetween(1000,2000),
                'available' => 10,
                'total' => 10,
            ]);
        }
        for ($i = 0; $i <= 5; $i++)
        {
            DB::table('rooms')->insert([
                'name' => $faker->streetName,
                'type_id' => 2,
                'description' => $faker->paragraph(10,true),
                'price' => $faker->numberBetween(10000,20000),
                'available' => 5,
                'total' => 5,
            ]);
        }
    }
}
