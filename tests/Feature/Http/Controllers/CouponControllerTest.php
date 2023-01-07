<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CouponController
 */
class CouponControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_behaves_as_expected()
    {
        $coupons = Coupon::factory()->count(3)->create();

        $response = $this->get(route('coupon.index'));
    }
}
