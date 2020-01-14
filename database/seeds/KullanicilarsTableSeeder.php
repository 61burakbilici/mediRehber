<?php

use Illuminate\Database\Seeder;

class KullanicilarsTableSeeder extends Seeder
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
            DB::table('users')->insert(
                [
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'users_tel' => $faker->PhoneNumber,
                    'hastane_id' => $faker->randomDigit,
                    'email_verified_at' => now(),
                    'role' => 1,
                    'password' => bcrypt('1'),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );

        }
    }
}
