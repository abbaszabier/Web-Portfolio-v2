@extends('layouts.sidebar')
@section('main')

<div class="row justify-content-center" style="height: 100vh; display:flex; justify-content:center; align-items:center;">
    <div class="col-md-5">
        <main class="form-signin">
            <form action="/login" method="POST">
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center" style="font-family: 'Poppins', serif;">Please sign in</h1>
          
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>

              <button class="w-100 btn btn-lg btn-primary" style="font-family: 'Poppins', serif;"  type="submit">Login</button>
            </form>
        </main>
    </div>
</div>

@endsection