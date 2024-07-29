@extends('bootstrap.master')
@section('title')
    Color and Typography
@endsection

@section('body')
<div class="row">
    <div class="col-4">
      <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
        <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
        <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
        <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
      </div>
    </div>
    <div class="col-8">
      <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <h4 id="list-item-1">Item 1</h4>
        <p>...</p>
        <h4 id="list-item-2">Item 2</h4>
        <p>...</p>
        <h4 id="list-item-3">Item 3</h4>
        <p>...</p>
        <h4 id="list-item-4">Item 4</h4>
        <p>...</p>
      </div>
    </div>
  </div>
<div class="card" aria-hidden="true">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title placeholder-glow">
        <span class="placeholder col-6"></span>
      </h5>
      <p class="card-text placeholder-glow">
        <span class="placeholder col-7"></span>
        <span class="placeholder col-4"></span>
        <span class="placeholder col-4"></span>
        <span class="placeholder col-6"></span>
        <span class="placeholder col-8"></span>
      </p>
      <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
    </div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.imgacademy.com/sites/default/files/styles/scale_1700w/public/2023-success-preview.jpg?itok=WQtCjz89" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/free-photo/colorful-design-with-spiral-design_188544-9588.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1721347200&semt=ais_user" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/free-photo/colorful-design-with-spiral-design_188544-9588.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1721347200&semt=ais_user" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <figure class="text-center">
        <h2 class="visually-hidden">Title for screen readers</h2>

        <blockquote class="blockquote text-primary-emphasis bg-primary-subtle">
            <p>A well-known quote, contained in a blockquote element.</p>
        </blockquote>
        <figcaption class="blockquote-footer text-primary-emphasis">
            Someone famous in <cite title="Source Title">Source Title</cite>
        </figcaption>
    </figure>
    <div class="bg-info clearfix ">
        <button type="button" class="btn btn-secondary float-start">Example Button floated left</button>
        <button type="button" class="btn btn-secondary float-end">Example Button floated right</button>
    </div>
    {{-- <div class="vstack border p-2 bg-danger text-light gap-3"> --}}
    <div class="hstack border p-2 bg-danger text-light gap-3">
        <div class="p-2 border .bg-primary-subtle">First item</div>
        <div class="vr"></div>
        <div class="p-2 me-auto border">Second item</div>
        <div class="p-2  border">Third item</div>
        <p class="text-primary-emphasis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, delectus?</p>
    </div>
    <div class="bg-danger w-25 p-3">Width 25%</div>
    <div class="bg-danger w-50 p-3">Width 50%</div>
    <div class="bg-danger w-75 p-3">Width 75%</div>
    <div class="bg-danger w-100 p-3">Width 100%</div>
    <div class="bg-danger w-auto p-3">Width auto</div>
@endsection
