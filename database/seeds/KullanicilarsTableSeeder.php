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
                    'users_name' => $faker->name,
                    'users_username' => $faker->username,
                    'users_email' => $faker->email,
                    'users_tel' => $faker->PhoneNumber,
                    'hastane_id' => $faker->randomDigit,
                    'email_verified_at' => now(),
                    'users_password' => bcrypt('123456789'),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );

        }
    }
}
