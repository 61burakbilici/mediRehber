<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HastanelersTableSeeder::class);
        $this->call(KullanicilarsTableSeeder::class);
        $this->call(HastanesTableSeeder::class);
        $this->call(PozisyonlarsTableSeeder::class);
        $this->call(RkategoriTableSeeder::class);

    }
}
