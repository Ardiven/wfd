<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    public function run()
    {
        DB::table('promotions')->insert([
            [
                'title' => 'Diskon 50% Produk A',
                'description' => 'Dapatkan diskon besar-besaran untuk Produk A hanya minggu ini!',
                'image' => 'promo1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Event Musik Gratis',
                'description' => 'Nikmati konser gratis di pusat kota dengan artis terkenal!',
                'image' => 'promo2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
