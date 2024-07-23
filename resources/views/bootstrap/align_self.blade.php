@extends('bootstrap.master')
@section('title')
    Align Self
@endsection

@section('body')
    <div class="container">
        {{-- <div class="row align-items-start" style="height:300px"> --}}
        <div class="row" style="height:300px">
            <div class="col-md-3 align-self-lg-start pink">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, ducimus.</div>
            <div class="col-md-3 align-self-lg-center green">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae, vitae iusto odit qui optio delectus dolorum harum culpa hic dolores?</div>
            <div class="col-md-3 align-self-lg-end orange">Lorem ipsum dolor sit amet.</div>
        </div>
    </div>
@endsection
