@extends("dashboard.main")
@section("container")

<div class="row justify-content-center mt-4 mb-5">
    <div class="col-md-11">
        <article>
            <h1 class="mb-2">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success">Back</a>
            <a href="" class="btn btn-warning">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            <div class="mt-4">
                {!! $post->body !!}
            </div>
        </article>
    </div>
</div>

@endsection