@extends('layouts.auth-master');

@section('content')
  
    <form action="{{route('login.loginUser')}}" method="post">
        @csrf
        <h1>Login User</h1>
        <div class="form-group mb-3">
            <input type="text" name="name" id="" class="form-control " required placeholder="UserName">
        </div>
        <div class="form-group mb-3">
            <input type="password" name="password" id="" class="form-control " required placeholder="Password">
        </div>
        <button class="btn btn-lg btn-primary w-100" type="submit">Login</button>
    </form>
    <a href="{{route('home.index')}}" class="btn btn-lg btn-warning mt-4">Back</a>

@endsection 