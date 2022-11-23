@extends('layouts.sidebar')
@section('main')
<div class="container d-flex ps-3 pe-3" style=" height:100%" >
    <div class="row d-flex align-items-center" style="margin:auto; width:100%%;">
        <div class="home-info">
            <div class="hello align-middle">
                <h3>Hi, my name <span class="name">Abbas Zabier</span></h3>
                <h1 class="my-professional">I'm a <span class="typing"></span></h1>
                <p class="mb-4">Hello all 👋, welcome to my personal website. I'm a guy who loves to coding, design, cat, coffee, and music. On this web you can find my projects on portfolio page.</p>
                <a href="/contact"><button type="button" class="btn btn-primary me-4"><i class="bi bi-briefcase me-2"></i> Hire Me</button></a>
                <a href="/portfolio"><button type="button" class="btn btn-outline-primary">My Projects</button></a>
            </div>
        </div>
        <div class="home-img ms-auto">
            <img src="/img/a1.png" class="ms-auto " alt="">
        </div>
    </div>
</div>
@endsection
                