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
                    'username' => $faker->username,
                    'email' => $faker->email,
                    'hastane_id' => $faker->randomDigit,
                    'email_verified_at' => now(),
                    'password' => bcrypt('123456789'),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );

        }
    }
}
