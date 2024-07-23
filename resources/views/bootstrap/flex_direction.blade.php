@extends('bootstrap.master')

@section('title')
    Flex Direction
@endsection

@section('body')
    <div class="container">
        {{-- <div class="row flex-row-reverse"> --}}
        {{-- <div class="row flex-column-reverse"> --}}
        {{-- <div class="row flex-nowrap"> --}}
        {{-- <div class="row flex-wrap-reverse"> --}}
        <div class="row flex-row">
            <div class="col flex-fill pink">
                <h1>Col A</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, aut?</p>
            </div>
            <div class="col yellow">
                <h1>Col B</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, maxime molestias voluptatum natus
                    aliquam dignissimos recusandae dolor itaque quaerat nisi!</p>
            </div>
            <div class="col flex-fill green">
                <h1>Col C</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, explicabo.</p>
            </div>
            <div class="col red">
                <h1>Col D</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas quos minima ullam eum expedita dolores
                    fugit animi alias dignissimos libero.</p>
            </div>
            <div class="col tomato">
                <h1>Col E</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas quos minima ullam eum expedita dolores
                    fugit animi alias dignissimos libero.</p>
            </div>
        </div>
    </div>
@endsection
