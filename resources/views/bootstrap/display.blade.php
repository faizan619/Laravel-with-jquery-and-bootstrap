@extends('bootstrap.master')

@section('title')
    Flex Direction
@endsection

@section('body')
    <div class="container">
        {{-- <div class="pink d-lg-inline-block p-3">
            <h2>Col A</h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="green d-lg-inline-block p-3">
            <h2>Col A</h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div> --}}
        {{-- <div class="row">

            <div class="col-md-3 red">
                <h1>Col 1</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, harum?</p>
        </div>
        <div class="col-md-3 d-none d-lg-block green">
            <h1>Col 2</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, a asperiores? Asperiores, dolorem? Velit, quis.</p>
        </div>
        <div class="col-md-3 blue">
            <h1>Col 3</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo, commodi.
            </p>
        </div>
        <div class="col-md-3 orange">
            <h1>Col 4</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, maiores.</p>
        </div> --}}
        <div class="d-flex flex-column">
            <div class="p-3 green order-2">Col A</div>
            <div class="p-3 red order-3">Col B </div>
            {{-- <div class="p-3 orange order-1 d-none d-print-block">Col C</div> --}}
            <div class="p-3 orange order-1 d-block d-print-none">Col C</div>
        </div>
    </div>
    </div>
@endsection
