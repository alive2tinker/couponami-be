<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavoriteResource;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class FavoriteController extends Controller
{
//    use DisableAuthorization;
    protected $model = Favorite::class;
    protected $resource = FavoriteResource::class;

    protected $relation = 'user';

    public function resolveUser()
    {
        return Auth::guard('sanctum')->user();
    }
}
