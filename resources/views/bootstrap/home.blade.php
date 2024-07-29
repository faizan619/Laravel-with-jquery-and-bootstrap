@extends('bootstrap.master')

@section('title')
    Home Bootstrap
@endsection

@section('body')
    <div class="row d-flex gap-3">
        <a class="col-3 p-3 rounded bg-primary text-light" href="{{ route('align_self') }}">Align Self tutorial</a>
        <br>
        <a class="col-3 p-3 rounded bg-primary text-light" href="{{ route('flex_direction') }}">Flex Direction tutorial</a>
        <br>
        <a class="col-3 p-3 rounded bg-primary text-light" href="{{ route('display') }}">Flex Direction tutorial</a>
        <br>
        <a class="col-3 p-3 rounded bg-primary text-light" href="{{ route('float') }}">Float tutorial</a>
        <br>
        <a class="col-3 p-3 rounded bg-primary text-light" href="{{ route('position') }}">Position tutorial</a>
        <br>
        <a class="col-3 p-3 rounded bg-primary text-light" href="{{ route('advance') }}">Advance Padding and Margin tutorial</a>
        <br>
        {{-- net ninja part --}}
        <a class="col-3 p-3 rounded bg-primary text-light" href="{{ route('typo') }}">Color and TypeGraphy</a>
        <br>
        <a class="col-3 p-3 rounded bg-primary text-light" href="{{ route('nav') }}">Navbar</a>
        <br>
        <a class="col-3 p-3 rounded bg-primary text-light" href="{{ route('glutter') }}">Glutter</a>
        <br>
        <a class="col-3 p-3 rounded bg-primary text-light" href="{{ route('grid') }}">Gird</a>
        <br>
        <a class="col-3 p-3 rounded bg-primary text-light" href="{{ route('githubclone') }}">Github Clone</a>
    </div>
@endsection
