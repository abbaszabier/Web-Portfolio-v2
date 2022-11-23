@extends('layouts.sidebar')
@section('main')
<div class="container ">
    <div class="row text-center mt-4 p-0" style="margin-bottom: 20px">
        <div class="col-md-12 mb-2">
            <h2 class="d-block">My Contact</h2>
        </div>
    </div>
    <div class="row mb-2" style="margin-bottom: 20px">
        <div class="col-lg-4 mt-2">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-2">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-2">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 justify-content-center" style="margin-bottom: 100px">
        <div class="col-md-12 mb-4 mt-3">
            <h4 class="text-center d-block">Have you any questions?</h4>
        </div>
        <div class="col-lg-8">
            <form>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                    <label for="subject">Subject</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection