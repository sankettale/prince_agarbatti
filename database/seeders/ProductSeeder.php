<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Sugandhi Gajra Agarbatti',
            'price'=>'Rs 100',
            'description'=>'We are manufacturing and supplying huge range of Bhavana Agarbatti from Pune, Maharashtra, India. Our Otees No. 1 Agarbattis are comprised of natural base materials keeping in mind the national and international quality standards. Our offered Bhavana Agarbatti are widely liked by our customers which are located all round the nation.',
            'category'=>'Agarbatti',
            'gallery'=>'https://tiimg.tistatic.com/fp/1/607/sugandhi-gajara-agarbattis-288.jpg',
            ],
            [
                'name'=>'Lovely Rose Agarbatti',
                'price'=>'Rs 200',
                'description'=>'We manufacture and supply Lovely Rose Agarbatti in various fragrances to suit the different demands of the clients from Pune, Maharashtra, India. Our Lovely Rose Agarbatti are comprised of natural base materials keeping in mind the national and international quality standards.',
                'category'=>'Agarbatti',
                'gallery'=>'https://tiimg.tistatic.com/fp/2/607/lovely-rose-agarbatti-280.jpg',
            ],
                [
                    'name'=>'Yogi Agarbatti',
                    'price'=>'Rs 300',
                    'description'=>'We are manufacturing and supplying huge range of Bhavana Agarbatti from Pune, Maharashtra, India. Our Otees No. 1 Agarbattis are comprised of natural base materials keeping in mind the national and international quality standards. Our offered Bhavana Agarbatti are widely liked by our customers which are located all round the nation.',
                    'category'=>'Agarbatti',
                    'gallery'=>'https://tiimg.tistatic.com/fp/1/607/yogi-agarbatti-278.jpg',
                ],
                    [
                        'name'=>'Special Bhavna Agarbatti',
                        'price'=>'Rs 200',
                        'description'=>'We are manufacturing and supplying huge range of Bhavana Agarbatti from Pune, Maharashtra, India. Our Otees No. 1 Agarbattis are comprised of natural base materials keeping in mind the national and international quality standards. Our offered Bhavana Agarbatti are widely liked by our customers which are located all round the nation.',
                        'category'=>'Agarbatti',
                        'gallery'=>'https://tiimg.tistatic.com/fp/2/607/special-bhavana-agarbattis-283.jpg',
                        ]
            ]);
    }
}
