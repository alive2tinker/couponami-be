<?php

namespace App\Http\Controllers;

use App\Http\Resources\CouponResource;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class CouponController extends Controller
{
    use DisableAuthorization;

    protected $model = Coupon::class;
    protected $resource = CouponResource::class;

    /**
     * The relations that are allowed to be included together with a resource.
     *
     * @return array
     */
    public function includes() : array
    {
        return ['favorites'];
    }

    public function searchableBy() : array
    {
        return [
            'code',
//            'offer',
//            'details',
//            'store.name',
//            'category.name',
        ];
    }

}
