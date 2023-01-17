<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavoriteResource;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function list(User $user)
    {
        return response()->json(FavoriteResource::collection($user->favorites()->paginate(10)), 200);
    }

    public function registerFavorite(\App\Models\User $user, $related)
    {
        return response()->json($related, 200);
        $coupon = \App\Models\Coupon::find($related);
        $coupon->favorites()->create(['user_id' => $user->id]);
        return response()->json(__("favorited successfully"), 201);
    }
}
