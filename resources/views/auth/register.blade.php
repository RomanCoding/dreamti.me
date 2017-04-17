@extends('layouts.app')

@section('content')
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Let's get started
                </h1>
                <h2 class="subtitle">
                    Simple registration - and your music will always be with you!
                </h2>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="column is-4 is-offset-4">
            @include('forms.registration')
        </div>
    </div>
@endsection
