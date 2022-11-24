@extends("dashboard.main")
@section("container")

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/posts" method="POST">
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title">
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug">
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Category</label>
        <select class="form-select" name="category_id">
          <option selected>Open this select menu</option>
          @foreach ($categories as $item)
          <option value="{{ $item->id }}">{{ $item->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="d-flex justify-content-between mb-3">
        <div class="col-lg-5">
          <label for="web" class="form-label">Github</label>
          <input type="text" class="form-control" id="github" name="github">
        </div>
        <div class="col-lg-6">
          <label for="web" class="form-label">Web</label>
          <input type="text" class="form-control" id="web" name="web">
        </div>
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Body</label>
        <textarea class="form-control" id="body" name="body"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
{{-- <script>
  CKEDITOR.replace('body', {
      filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
      filebrowserUploadMethod: 'form'
  });
</script> --}}
<script>
  ClassicEditor
  .create( document.querySelector( '#body' ), {
            ckfinder:{
              uploadUrl: "{{ route('ckeditor.upload') .'?token=' . csrf_token()}}"
            }
          } )

          .then( editor => {
            console.log( editor );
        })
          .catch( error => {
                  console.error( error );
          } );
</script>
<script>
  const title = document.querySelector("#title");
  const slug = document.querySelector("#slug");

  title.addEventListener("change", function() {
    fetch("/dashboard/posts/createSlug?title=" + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  })
</script>
@endsection