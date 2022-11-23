@extends('layouts.sidebar')
@section('main')
<div class="services-info">
    <div class="container align-items-center  ps-3 pe-3" style="display:flex; justify-content:center; align-items:center; height:100vh">
        <div class="row">
            <div class="col-md-12 mb-3 mt-4">
              <h2 class="services text-center">My Services</h2>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">UI Design</h5>
                          <p class="card-text">Mobile design, web design, and wireframing.</p>
                          <a href="/services/ui-design"><button type="button" class="btn stretched-link btn-primary btn-sm"> Show Project</button></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-code-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z"/>
                          </svg>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Frontend</h5>
                          <p class="card-text">HTML, CSS, JavaScript, Bootstrap, PHP, Laravel</p>
                          <a href="/services/frontend"><button type="button" class="btn stretched-link btn-primary btn-sm"> Show Project</button></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
