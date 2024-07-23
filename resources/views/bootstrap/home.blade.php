@extends('bootstrap.master')

@section('title')
    Home Bootstrap
@endsection

@section('body')
        <a href="{{route('align_self')}}">Align Self tutorial</a>
        <br>
        <a href="{{route('flex_direction')}}">Flex Direction tutorial</a>
        <a href="{{route('display')}}">Flex Direction tutorial</a>
@endsection
