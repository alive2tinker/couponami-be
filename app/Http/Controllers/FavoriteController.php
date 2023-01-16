<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavoriteResource;
use App\Http\Resources\UserResource;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Orion\Http\Controllers\RelationController;

class FavoriteController extends RelationController
{
//    use DisableAuthorization;
    protected $model = User::class;
    protected $resource = FavoriteResource::class;

    protected $relation = 'favorites';

    public function resolveUser()
    {
        return auth('sanctum')->user();
    }
}
