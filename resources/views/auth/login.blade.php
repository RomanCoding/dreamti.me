@extends('layouts.app')

@section('content')
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Sign in
                </h1>
                <h2 class="subtitle">
                    And stay tuned
                </h2>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="column is-4 is-offset-4">
            @include('forms.login')
        </div>
    </div>
@endsection
