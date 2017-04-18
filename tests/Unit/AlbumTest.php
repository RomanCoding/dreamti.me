<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AlbumTest extends TestCase
{
    use DatabaseMigrations;

    protected $album;

    public function setUp()
    {
        parent::setUp();
        $this->album = factory('App\Album')->create();
    }

    /** @test */
    public function album_belongs_to_artist()
    {
        $this->assertInstanceOf('App\Artist', $this->album->artist);
    }

    /** @test */
    public function album_contains_songs()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->album->songs);
    }
}
