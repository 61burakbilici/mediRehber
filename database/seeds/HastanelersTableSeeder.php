<?php

use Illuminate\Database\Seeder;

class HastanelersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('tr_TR');

        for ($i = 0; $i < 10; $i++) {
            DB::table('hastanelers')->insert(
                [
                    'hastane_adi' => $faker->company,
                    'hastane_il' => $faker->city,
                    'hastane_ilce' => $faker->city,
                    'hastane_adres' => $faker->address,
                    'hastane_tel' => $faker->phoneNumber,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );

        }
    }
}
