<?php

use Illuminate\Database\Seeder;

class RkategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create('tr_TR');
        DB::table('rkategoris')->insert(
            [
                [
                    'rehkat_adi' => "Acil Servis",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'rehkat_adi' => "Anestezi",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'rehkat_adi' => "İdari Bölüm",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'rehkat_adi' => "Klinik",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'rehkat_adi' => "Laboratuar",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'rehkat_adi' => "Medikal Bölüm",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'rehkat_adi' => "Radyoloji",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'rehkat_adi' => "Servis",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'rehkat_adi' => "Patoloji",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );

    }
}
