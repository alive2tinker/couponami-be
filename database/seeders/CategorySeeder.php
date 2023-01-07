<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => [
                'ar' => 'طعام',
                'en' => 'Food'
            ]
        ]);

        Category::create([
            'name' => [
                'ar' => 'التجارة الالكترونية',
                'en' => 'E-Commmerce'
            ]
        ]);

        Category::create([
            'name' => [
                'ar' => 'الازياء',
                'en' => 'Fashion'
            ]
        ]);

        Category::create([
            'name' => [
                'ar' => 'سيارات',
                'en' => 'cars'
            ]
        ]);
    }
}
