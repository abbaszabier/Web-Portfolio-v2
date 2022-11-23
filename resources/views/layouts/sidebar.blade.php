<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- Tailwind CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/tailwindcss.css') }}"> --}}

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skins/color-1.css') }}">

    <title>Abbaszabier | {{ $title }}</title>
  </head>
  <body>
    <!-- Main Container Start -->
    <div class="main-container">
        <!-- Aside Start -->
        @include('partials.navbar')
        <!-- Aside End -->
        <!-- Main Content Start -->
        <div class="main-content" style="background-color: aqua">
            <!-- Home Section Start -->
              <section class="home section">
                  <div class="container-sm ">
                      @yield('main')
                  </div>
              </section>
              <div class="nav-bottom">
                  <a href="/" class="{{ ($title==="Home") ? 'active' :'' }}"><i class="{{ ($title==="Home") ? 'bi bi-house-fill' :'bi bi-house' }}"></i></a>
                  <a href="/about"class="{{ ($title==="About") ? 'active' :'' }}"><i class="{{ ($title==="About") ? 'bi bi-person-fill' :'bi bi-person' }}" ></i></a>
                  <a href="/services"class="{{ ($title==="Services") ? 'active' :'' }}"><i class=" {{ ($title==="Services") ? '<bi bi-file-earmark-text-fill' :'bi bi-file-earmark-text' }}"></i> </a>
                  <a href="/portfolio" class="{{ ($title==="Portfolio") ? 'active' :'' }}"><i class="{{ ($title==="Portfolio") ? 'bi bi-grid-fill' :'bi bi-grid' }}"></i></a>
                  <a href="/contact" class="{{ ($title==="Contact") ? 'active' :'' }}"><i class="{{ ($title==="Contact") ? 'bi bi-telephone-plus-fill ' :'bi bi-telephone-plus' }}"></i></a>
              </div>
            <!-- Home Section End -->
        </div>
        <!-- Main Content End -->
    </div>
    <!-- Main Container End -->

    <!-- JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <script type="text/javascript">
      $.ajaxSetup({
        headers:{
          'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
      });

      $('#search').on('keyup', function(){
        $search = $(this).val();
        if($search !== ""){
          $.ajax({
            type: "POST",
            method: "post",
            url:"/portfolio/",
            data: {
              _token : $('meta[name="csrf-token"]').attr('content'), 
              search:$search
            },
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
              var searchResultAjax = '';
              data = JSON.parse(data);
              console.log(data);
              $('#searchResult').show();
              for (let i = 0; i < data.length; i++) {
                searchResultAjax +=`<div class="col-md-4">
            <div class="card shadow-sm mt-4">
                <img src="/img/bg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="badge mb-2 p-2"><a class="text-decoration-none" href="/services/{{ $post->category->slug }}">{{ $post->category->name }}</a></span>
                    <h5 class="card-title"><a href="/portfolio/{{ $post->slug }}">`+data[i].title+`</a></h5>
                    <small><p>{{ $post->user->name }} - {{ $post->created_at->diffForHumans() }}</p></small>
                    @if ($post->category->name == "UI Design")
                        <a href="/portfolio/{{ $post->slug }}" class="text-decoration-none"> <i class="bi bi-journal-text me-2"></i>View More</a>
                    @else
                        <a href="{{ $post->github }}" class="text-decoration-none me-2"><i class="bi bi-github"></i> GitHub</a>
                        <a href="{{ $post->web }}" class="text-decoration-none"><i class="bi bi-link-45deg"></i> Visit Web</a>
                    @endif
                </div>
              </div>
        </div>`
              }
              $('#searchResult').html(searchResultAjax);
            }
          })
        }
        else {
          $('#searchResult').html('');
        }
      })
    </script> --}}
  </body>
</html>