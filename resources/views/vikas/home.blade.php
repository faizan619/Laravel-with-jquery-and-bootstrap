@extends('vikas.master')

@section('body')
    <div class="row ">
        {{-- @include('vikas.component.navbar') --}}
        @include('vikas.component.alert')
        <div class="col-md-6 m-auto d-flex gap-3">

            <div class="card" style="width: 20rem;">
                <img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <img src="https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?cs=srgb&dl=pexels-anjana-c-169994-674010.jpg&fm=jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    @if (Auth::User()->username === 'faizan')
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        @else
                        <p>You are not faizan</p>
                    @endif
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <img src="https://imgv3.fotor.com/images/slider-image/A-blurry-close-up-photo-of-a-woman.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 20rem;">
                <img src="https://d38b044pevnwc9.cloudfront.net/cutout-nuxt/enhancer/3.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection
