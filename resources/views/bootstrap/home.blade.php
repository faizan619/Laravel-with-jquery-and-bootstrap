@extends('bootstrap.master')

@section('title')
    Home Bootstrap
@endsection

@section('body')
    <div class="row">
        <a class="col" href="{{ route('align_self') }}">Align Self tutorial</a>
        <br>
        <a class="col" href="{{ route('flex_direction') }}">Flex Direction tutorial</a>
        <br>
        <a class="col" href="{{ route('display') }}">Flex Direction tutorial</a>
        <br>
        <a class="col" href="{{ route('float') }}">Float tutorial</a>
        <br>
        <a class="col" href="{{ route('position') }}">Position tutorial</a>
    </div>
@endsection
