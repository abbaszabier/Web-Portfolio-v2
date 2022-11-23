@extends("dashboard.main")
@section("container")

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

<a href="/dashboard/posts/create" class="btn btn-primary">Create New Post</a>
<div class="table-responsive col-lg-10">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->title }}</td>
          <td>{{ $item->category->name }}</td>
          <td>{{ date('j F Y', strtotime($item->created_at)) }}</td>
          <td>    
            <a href="/dashboard/posts/{{ $item->slug }}" class="badge bg-info"> <span data-feather="eye"></span> </a>
            <a href="" class="badge bg-info"> <span data-feather="edit"></span> </a>
            <a href="" class="badge bg-danger"> <span data-feather="x-circle"></span> </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection