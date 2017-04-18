@extends('layouts.app')

@section('content')
    <div class="columns is-multiline">
        @foreach($artist->albums as $album)
            <div class="card column is-4">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <img src="http://bulma.io/images/placeholders/96x96.png" alt="Image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4">{{ $album->name }}</p>
                            <p class="subtitle is-6">
                                <a href="{{ $album->artist->path() }}">{{ $album->artist->name }}</a>
                            </p>
                        </div>
                    </div>
                    <div class="content">
                        <ol>
                            @foreach($album->songs as $song)
                                <li>{{ $song->name }}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
