<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\FavoriteController
 */
class FavoriteControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_behaves_as_expected()
    {
        $favorites = Favorite::factory()->count(3)->create();

        $response = $this->get(route('favorite.index'));
    }
}
