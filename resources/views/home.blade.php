@extends('layouts.sidebar')
@section('main')
<div class="container">
    <div class="home row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-lg-6">
            <h5>Hi, my name <span class="name">Abbas Zabier M.</span></h5>
            <h1 class="my-professional">I'm a <span class="typing"></span></h1>
            <p class="mb-4">Hello all 👋, welcome to my personal website. I'm a guy who loves to coding, design, cat, coffee, and music. On this web you can find my projects on portfolio page.</p>
            <a href="/contact"><button type="button" class="btn btn-primary me-4"><i class="bi bi-briefcase me-2"></i> Hire Me</button></a>
            <a href="/portfolio"><button type="button" class="btn btn-outline-primary">My Projects</button></a>
        </div>
        <div class="col-lg-5">
            <img src="/img/a2.png" class="ms-auto img-fluid" width="100%" alt="">
        </div>
    </div>
</div>
@endsection
                