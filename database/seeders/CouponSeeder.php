<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code' => Str::random(4),
            'offer' => [
                'ar' => 'لوريم إيبسوم(Lorem Ipsum) ',
                'en' => "Lorem Ipsum "
            ],
            'details' => [
                'ar' => 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس ',
                'en' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
            ],
            'store_id' => rand(1,3),
            'category_id' => rand(1,3),
        ]);

        Coupon::create([
            'code' => Str::random(4),
            'offer' => [
                'ar' => 'لوريم إيبسوم',
                'en' => "Lorem Ipsum is simply"
            ],
            'details' => [
                'ar' => 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس ',
                'en' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
            ],
            'store_id' => rand(1,3),
            'category_id' => rand(1,3),
        ]);

        Coupon::create([
            'code' => Str::random(4),
            'offer' => [
                'ar' => 'لوريم إيبسوم ',
                'en' => "Lorem Ipsum is"
            ],
            'details' => [
                'ar' => 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس ',
                'en' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
            ],
            'store_id' => rand(1,3),
            'category_id' => rand(1,3),
        ]);

        Coupon::create([
            'code' => Str::random(4),
            'offer' => [
                'ar' => 'لوريم إيبسوم ',
                'en' => "Lorem Ipsum is"
            ],
            'details' => [
                'ar' => 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس ',
                'en' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
            ],
            'store_id' => rand(1,3),
            'category_id' => rand(1,3),
        ]);

        Coupon::create([
            'code' => Str::random(4),
            'offer' => [
                'ar' => 'لوريم إيبسو ',
                'en' => "Lorem Ipsum is simply"
            ],
            'details' => [
                'ar' => 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس ',
                'en' => "Lorem Ipsum is simply"
            ],
            'store_id' => rand(1,3),
            'category_id' => rand(1,3),
        ]);

        Coupon::create([
            'code' => Str::random(4),
            'offer' => [
                'ar' => 'لوريم إيبسوم',
                'en' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
            ],
            'details' => [
                'ar' => 'لوريم إيبسوم',
                'en' => "Lorem Ipsum is simply"
            ],
            'store_id' => rand(1,3),
            'category_id' => rand(1,3),
        ]);
    }
}
