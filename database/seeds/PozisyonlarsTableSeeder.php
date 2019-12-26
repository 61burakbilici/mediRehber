<?php

use Illuminate\Database\Seeder;

class PozisyonlarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create('tr_TR');


        DB::table('pozisyonlars')->insert(
            [
                [
                    'pozisyon' => "Acil Servis Hekimi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Anestezi Teknisyeni",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Anestezi Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Anjio Teknisyeni",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Arşiv Görevlisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Aşçı Başı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ayaktan Hasta Danışma Göz",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ayaktan Hasta Danışmanı- Acil",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ayaktan Hasta Danışmanı- Çocuk",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ayaktan Hasta Danışmanı- Danışma",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ayaktan Hasta Danışmanı- FTR",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ayaktan Hasta Danışmanı- Gastroenteroloji",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ayaktan Hasta Danışmanı- Göz&amp;Diş",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ayaktan Hasta Danışmanı- Kadın Doğum",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ayaktan Hasta Danışmanı- Kardiyoloji/KVC",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ayaktan Hasta Danışmanı- Radyoloji",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ayaktan Hasta Danışmanı-Laboratuvar",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ayaktan Hasta Danışmanı-Üroloji",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Başhekim",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Başhemşire",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Beyin ve Sinir Cerahisi Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Bilgi Sistemleri Görevlisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Bilgi Sistemleri Yoneticisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Biyokimya Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Biyolog",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Biyomedikal Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Check-Up",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Cihaz Entegrasyonu",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Çağrı Merkezi Görevlisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Çağrı Merkezi Yöneticisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Çocuk Cerrahisi Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Çocuk Gastroenteroloji Uzm.",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Çocuk Hastalıkları Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Çocuk Kardiyolojisi Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Çocuk Nefrolojisi Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Çocuk Nörolojisi Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Çocuk Psikiyatrisi Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Damar Cerrahisi Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Depo Görevlisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Dermatoloji Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Destek Hizmetleri Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Dış Kullanıcı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Diş Hekimi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Diş Teknisyeni",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Diyaliz Uzm.",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Diyetisyen",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Eczacı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Eczane Teknisyeni ",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "EEG-EMG Teknisyeni",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Endokrinoloji Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Endoskopi Teknisyeni",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Enfeksiyon Hastalıkları Uzm.",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Enfeksiyon Hemşiresi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Estetisyen",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Fizyoterapist",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "FTR Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Gastroenteroloji Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Gece Müdürü",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Genel Cerrahi Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Genel Müdür",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "GM.Yrd.",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "GM.Yrd.1",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Göğüs Cerrahisi Uzm.",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Göğüs Hastalıkları Uzm.",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Göz Hastalıkları Uzm.",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Göz Teknisyeni",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hasta Danışmanı- Diş",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hasta Hizmetleri Yöneticisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hasta İlişkileri Görevlisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hasta İlişkileri Yöneticisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hasta Kabul ",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Havacılık Tıp Merkezi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hematoloji Uzm.",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire - Anjio Lab",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire - Bebek Odası",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire - IVF",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- 6.Kat",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire -7.Kat",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- Acil Servis",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- Ameliyathane",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- Dahili Servis",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- DİĞER",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- Genel YB",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- Kadın Doğum",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- Kan Merkezi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- Koroner YB",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- KVC Servis",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- Supervisor",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- YB KVC",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire- YB Yenidoğan",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşire-Doğumhane",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Hemşiresi- Kardiyoloji Servisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "IVF Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "İç Hastalıklar Uzm.",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "İdare Amiri",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "İnsan Kaynakları Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "İnsan Kaynakları Yoneticisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "İşyeri Hekimi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Kadın Doğum Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Kalite Görevlisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Kalite ve Eğitim Hemşiresi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Kalp ve Damar Cerrahisi Uzm.",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Kan Alma Personeli",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Kardiyoloji Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Kat Hekimi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "KBB Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Laboratuvar Sorumlu Teknisyeni",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Laboratuvar Teknisyeni",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Lojistik Hizmetler Yöneticisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Mali Isler Yöneticisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Medikal Direktör",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Medikal Estetik",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Medikal Muhasebe Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Medikal Muhasebe Yöneticisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Merkez",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Mikrobiyoloji Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Muhasebe Görevlisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Mutfak Görevlesi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Nefroloji Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Nöroloji Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Nükleer Tıp Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Odiometrist",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Organ Nakli Koordinatörü",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Organ Nakli Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ortopedi Teknisyeni",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Ortopedi Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Pazarlama ve İletişim Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Pazarlama ve İletişim Yöneticisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Pediatrik Onkoloji Ve Hematoloji",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Performans Geliştirme Uzmani",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Perfüzyonist",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Perinatoloji Uzm.",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Plastik Cerrahi Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Portör",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Psikiyatri Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Psikolog",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Radyoloji",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Radyoloji Teknisyeni",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Raportör- Radyoloji",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Santral Sorumlusu",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Satınalma Görevlisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Satinalma Yoneticisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Sistoskopi Teknisyeni",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Spor Hekimliği",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Sterilizasyon Personeli",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Stratejil Planlama Uzman",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Şoför",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Teknik Hizmetler Görevlisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Teknik Hizmetler Yöneticisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Temizlik Hizmetleri Görevlisi",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Tıbbı Onkoloji Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Tıbbi Hiz.Dir",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Tıbbi Sekreter",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Tıbbi Sekreter- Rapor Yazma",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "UA.Has.Gör.",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "UA.Hasta Direktörü",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Üroloji Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Vezne Sorumlusu",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Yara Bakım Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Yardımcı Sağlık Personeli",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Yatan Hasta Danışmanı- Ameliyathane",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Yatış &amp; Taburcu Danışmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Yeni Doğan YB Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Yoğun Bakım Uzmanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'pozisyon' => "Yönetici Asistanı",
                    'hastane_id' => $faker->randomDigit,
                    'ekleyen_id' => $faker->randomDigit,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );

    }


}
