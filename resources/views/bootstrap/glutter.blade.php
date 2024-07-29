@extends('bootstrap.master')
@section('title')
    Color and Typography
@endsection

@section('body')
    <div class="row g-0 bg-primary">
        <div class="col g-5 bg-primary ">col1</div>
        <div class="col bg-danger invisible md-visible">col2</div>
        <div class="col g-4 bg-success">col3</div>
    </div>
@endsection
