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


            DB::table('hastanelers')->insert(
                [
                    [
                        'hastane_adi' => "Çamlıca Hastanesi",
                        'hastane_il' => "İstanbul",
                        'hastane_ilce' => "Üsküdar",
                        'hastane_adres' => "Kısıklı Mah. Alemdağ Cad. No: 113, 34692 Üsküdar/İstanbul",
                        'hastane_tel' => "(0216) 522 60 00",
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hastane_adi' => "Çamlıca Tıp Merkezi",
                        'hastane_il' => "İstanbul",
                        'hastane_ilce' => "Üsküdar",
                        'hastane_adres' => "Kısıklı Mah. Alemdağ Cad. No: 113, 34692 Üsküdar/İstanbul",
                        'hastane_tel' => "(0216) 522 60 00",
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hastane_adi' => "International İstanbul",
                        'hastane_il' => "İstanbul",
                        'hastane_ilce' => "Beylikdüzü",
                        'hastane_adres' => "Büyükşehir, Beylikdüzü Cd. No:3, 34520 Beylikdüzü/İstanbul",
                        'hastane_tel' => "(0212) 867 75 00",
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hastane_adi' => "Avcılar Hastanesi",
                        'hastane_il' => "İstanbul",
                        'hastane_ilce' => "Avcılar",
                        'hastane_adres' => "Merkez, Marmara Cd, Şamlı Sk. No:32, 34310, Avcılar/İstanbul",
                        'hastane_tel' => "(0212) 695 48 30",
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hastane_adi' => "Bahçelievler Hastanesi",
                        'hastane_il' => "İstanbul",
                        'hastane_ilce' => "Bahçelievler",
                        'hastane_adres' => "Bahçelievler Merkez, Eski Londra Asf Cd No:2, 34180 Bahçelievler/İstanbul",
                        'hastane_tel' => "(0212) 695 48 30",
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hastane_adi' => "Haznedar Hastanesi",
                        'hastane_il' => "İstanbul",
                        'hastane_ilce' => "Bahçelievler",
                        'hastane_adres' => "Bahçelievler Merkez, Bağcılar Cd. No:1, 34160 Güngören/İstanbul",
                        'hastane_tel' => "(0212) 449 14 49",
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hastane_adi' => "Diş Bahçelievler Hastanesi",
                        'hastane_il' => "İstanbul",
                        'hastane_ilce' => "Bahçelievler",
                        'hastane_adres' => "Bahçelievler Merkez, Nurettin Paşa Sk. No:2, 34180 Bahçelievler/İstanbul",
                        'hastane_tel' => "(0212) 506 00 00",
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hastane_adi' => "Kadıköy Hastanesi",
                        'hastane_il' => "İstanbul",
                        'hastane_ilce' => "Kadıköy",
                        'hastane_adres' => "Zühtüpaşa Recep Peker Caddesi No:11, 34724 Mahallesi, 34724 Kadıköy/İstanbul",
                        'hastane_tel' => "(0216) 970 49 70",
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hastane_adi' => "Bursa Hastanesi",
                        'hastane_il' => "Bursa",
                        'hastane_ilce' => "Nilüfer",
                        'hastane_adres' => "Odunluk Mah. İzmir Yolu Cad. No:41 16110 Nilüfer/Bursa",
                        'hastane_tel' => "0224 970 01 01 ",
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hastane_adi' => "Sivas Hastanesi",
                        'hastane_il' => "Sivas",
                        'hastane_ilce' => "Merkez",
                        'hastane_adres' => "Kızılırmak Mh. Şehit Fethi Akyüz Cd. No: 8, Sivas",
                        'hastane_tel' => "0346 215 0 555",
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hastane_adi' => "Konya Hastanesi",
                        'hastane_il' => "Konya",
                        'hastane_ilce' => "Selçuklu",
                        'hastane_adres' => "Musalla Bağları Mh. Gürz Sk. No: 1, Selçuklu/Konya",
                        'hastane_tel' => "0332 221 80 80",
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hastane_adi' => "Internetaional Samsun Hastanesi",
                        'hastane_il' => "Samsun",
                        'hastane_ilce' => "Canik",
                        'hastane_adres' => "Yeni Mh. Şehit Mesut Birinci Cd. No: 85, Canik/Samsun",
                        'hastane_tel' => "0362 311 05 05",
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'hastane_adi' => "Internetaional Ankara Hastanesi",
                        'hastane_il' => "Ankara",
                        'hastane_ilce' => "Söğütözü",
                        'hastane_adres' => "Söğütözü Mah. 2176. Cad. No.3 06520 Söğütözü/Ankara ",
                        'hastane_tel' => "0312 292 92 92",
                        'created_at' => now(),
                        'updated_at' => now()
                    ]
                ]
            );

        }

}




//
//use Illuminate\Database\Seeder;
//
//class HastanelersTableSeeder extends Seeder
//{
//    /**
//     * Run the database seeds.
//     *
//     * @return void
//     */
//    public function run()
//    {
//        $faker = Faker\Factory::create('tr_TR');
//
//        for ($i = 0; $i < 10; $i++) {
//            DB::table('hastanelers')->insert(
//                [
//                    'hastane_adi' => $faker->company,
//                    'hastane_il' => $faker->city,
//                    'hastane_ilce' => $faker->city,
//                    'hastane_adres' => $faker->address,
//                    'hastane_tel' => $faker->phoneNumber,
//                    'created_at' => now(),
//                    'updated_at' => now()
//                ]
//            );
//
//        }
//    }
//}
