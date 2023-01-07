<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;
class CategoryController extends Controller
{
    use DisableAuthorization;
    protected $model = Category::class;

    protected $resource = CategoryResource::class;
}
