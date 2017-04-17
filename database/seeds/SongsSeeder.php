<?php

use Illuminate\Database\Seeder;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = factory(App\Artist::class, 10)->create();
        foreach ($artists as $artist) {
            $albums = factory(App\Album::class, 3)->create(['artist_id' => $artist->id]);

            foreach ($albums as $album) {
                $songs = factory(App\Song::class, rand(3, 8))->create(['album_id' => $album->id, 'artist_id' => $album->artist_id]);
            }
        }
    }
}
