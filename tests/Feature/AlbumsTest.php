<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AlbumsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_browse_albums()
    {
        $album = factory(\App\Album::class)->create();
        $response = $this->get('/albums');

        $response->assertSee($album->name);
    }
}
