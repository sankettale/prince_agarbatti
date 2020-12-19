<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'name'=>'Sugandhi Agarbatti',
                'gallery'=>('public/asset/img/main-slider22.jpg'),
            ],
            [
                'name'=>'Sugandhi Agarbatti',
                'gallery'=>('asset/img/main-slider33.png'),
            ],
            [
                'name'=>'Sugandhi Agarbatti',
                'gallery'=>('public/asset/img/main-slider44.jpg'),
            ]
        ]);
    }
}
