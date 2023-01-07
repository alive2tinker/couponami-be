<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
class FavoriteController extends Controller
{
    protected $model = Favorite::class;

    protected $relation = 'user';
}
