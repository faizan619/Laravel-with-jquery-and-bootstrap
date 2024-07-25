@extends('vikas.master')

@section('body')
{{-- enterEmployee --}}
<div class="row">
    <div class="col-md-4 m-auto">
        <form method="POST" action="{{route('registerEmp')}}" class="mt-5 card p-3 ">
            @csrf
            <div class="mb-3">
              <label for="nameinput" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="nameinput">
            </div>
            <div class="mb-3">
              <label for="usernameinput" class="form-label">User Name</label>
              <input type="text" name="username" class="form-control" id="usernameinput" >
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection