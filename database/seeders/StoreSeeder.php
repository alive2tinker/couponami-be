<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::create([
            'name' => [
                'ar' => 'متجر الكل',
                'en' => "All's store"
            ],
            'link' => 'https://google.com',
            'description' => [
                'ar' => 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس ',
                'en' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
            ],
            'icon' => fake()->imageUrl('1280','800','text'),
            'user_id' => 1,
        ]);

        Store::create([
            'name' => [
                'ar' => 'متجر اي هيرب',
                'en' => "iHerb's store"
            ],
            'link' => 'https://sa.iherb.com',
            'description' => [
                'ar' => 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس ',
                'en' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
            ],
            'icon' => fake()->imageUrl('1280','800','text'),
            'user_id' => 1,
        ]);

        Store::create([
            'name' => [
                'ar' => 'سيارتي ',
                'en' => "miCar"
            ],
            'link' => 'https://jalopnik.com',
            'description' => [
                'ar' => 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس ',
                'en' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy"
            ],
            'icon' => fake()->imageUrl('1280','800','text'),
            'user_id' => 1,
        ]);
    }
}
