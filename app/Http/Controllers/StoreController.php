<?php

namespace App\Http\Controllers;

use App\Http\Resources\StoreResource;
use App\Models\Store;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;
class StoreController extends Controller
{
    use DisableAuthorization;
    protected $model = Store::class;

    protected $resource = StoreResource::class;
}
