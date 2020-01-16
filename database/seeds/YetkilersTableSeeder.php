<?php

use Illuminate\Database\Seeder;

class YetkilersTableSeeder extends Seeder
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
            //$mail = $faker->email;
            DB::table('yetkilers')->insert(
                [
                    'users_id' => $faker->randomDigit,
                    'yetki_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );

        }
    }

}
