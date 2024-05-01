@extends('layout')
@section('main')
    <div class="container-fluid formHead">
        <form method="post" action="{{route('loginCheck')}}" class="formSection">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection