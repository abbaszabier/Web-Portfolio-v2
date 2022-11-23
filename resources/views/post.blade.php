@extends('layouts.sidebar')
@section('main')
<div class="container">
    <div class="row justify-content-center mt-4 mb-5">
        <div class="col-md-11">
            <article>
                <h1>{{ $post->title }}</h1>
                <p class="mb-5">By: {{ $post->user->name }} in <a href="/services/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
<a href="/portfolio">Back</a>
@endsection