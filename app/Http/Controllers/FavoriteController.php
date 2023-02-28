<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavoriteResource;
use App\Models\Coupon;
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
//        return response()->json($related, 200);
        $coupon = \App\Models\Coupon::find($related);
        $favorite = $coupon->favorites()->where('user_id', $user->id)->first();
        if(!$favorite){
            $coupon->favorites()->create(['user_id' => $user->id]);
            return response()->json(__("favorited successfully"), 201);
        }else{
            return response()->json(__("this coupon has been favorited already"), 400);
        }
    }

    public function deleteFavorite(User $user, Coupon $coupon)
    {
        try {
            $favorite = $coupon->favorites()->where('user_id', $user->id)->first()->delete();

            return response()->json('deleted successfully', 200);
        }catch (\Exception $e){
            return response()->json([
                'message' => "Error occured",
                'error' => $e->getMessage()
            ]);
        }
    }
}
