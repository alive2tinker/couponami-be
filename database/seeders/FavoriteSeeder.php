<?php

namespace Database\Seeders;

use App\Models\Coupon;
use App\Models\Favorite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coupons = Coupon::all();
        foreach($coupons as $coupon){
            $coupon->favorites()->create(['user_id' => 1]);
        }
    }
}
