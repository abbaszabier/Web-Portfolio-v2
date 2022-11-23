@extends('layouts.sidebar')
@section('main')
<div class="portfolio-main">
    <div class="row mt-4 mb-3">
        <div class="col-md-12 text-center">
            <h1 class="fs-3">All Project</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/portfolio">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" wire:model="search" id="search" name="search" value="{{ request('search') }}" placeholder="Search...">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="row align-items-center  ps-3 pe-3" id="searchResult" style="margin-bottom: 100px">
        @foreach ($posts as $post)
        <div class="col-md-4">
            <div class="card shadow-sm mt-4">
                <a href="/portfolio/{{ $post->slug }}">
                    <img src="/img/image1.png" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <span class="badge mb-2 p-2"><a class="text-decoration-none" href="/services/{{ $post->category->slug }}">{{ $post->category->name }}</a></span>
                    <h5 class="card-title"><a href="/portfolio/{{ $post->slug }}">{{ $post->title }}</a></h5>
                    <small><small><p><b>Post by :</b> {{ $post->user->name }} - {{ date('j F Y', strtotime($post->created_at)) }}</p></small></small>
                    @if ($post->category->name == "UI Design")
                        <a href="/portfolio/{{ $post->slug }}" class="text-decoration-none"> <i class="bi bi-journal-text me-2"></i>View More</a>
                    @else
                        <a href="{{ $post->github }}" class="text-decoration-none me-2"><i class="bi bi-github"></i> GitHub</a>
                        <a href="{{ $post->web }}" class="text-decoration-none"><i class="bi bi-link-45deg"></i> Visit Web</a>
                    @endif
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

