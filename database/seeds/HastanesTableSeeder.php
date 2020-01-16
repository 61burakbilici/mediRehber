<?php

use Illuminate\Database\Seeder;

class HastanesTableSeeder extends Seeder
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
            DB::table('hastanes')->insert(
                [
                    'adisoyadi' => $faker->name,
                    'dec' => $faker->postcode,
                    'sabit' => $faker->phoneNumber,
                    'faks' => $faker->phoneNumber,
                    'email' => $faker->email,
                    'bolum' => $faker->randomDigit,
                    'rehkat' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'hastane_id' => $faker->randomDigit,
                    'not' => $faker->text($maxNbChars = 1000),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );

        }
    }
}
