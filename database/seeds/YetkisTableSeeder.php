<?php

use Illuminate\Database\Seeder;

class YetkisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('tr_TR');
        DB::table('yetkis')->insert(
            [
                [
                    'yetki_adi' => "Admin",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'yetki_adi' => "Rehber",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'yetki_adi' => "Oryantasyon",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'yetki_adi' => "İSG",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'yetki_adi' => "Onam",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'yetki_adi' => "Online Provizyon",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'yetki_adi' => "Intranet",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'yetki_adi' => "Toner",
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]

        );
    }
}
