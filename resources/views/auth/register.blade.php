@extends('layouts.auth-master')

@section('content')
    <h1>Register</h1>
    <form action="{{ route('register.registration')}}" method="post">
        @csrf 
        <div class="form-group mb-3">
            <input type="email" name="email" id="" class="form-control" placeholder="example@gmail.com" required>
            @if ($errors->has('email'))
                <span class="text-danger">{{$errors->first('email')}}</span>
            @endif
        </div>
        <div class="form-group mb-3">
            <input type="text" name="name" id="" class="form-control" placeholder="Username" required>
            @if ($errors->has('name'))
            <span class="text-danger">{{$errors->first('email')}}</span>
        @endif
        </div>
        <div class="form-group mb-3">
            <input type="password" name="password" id="" class="form-control" placeholder="" required>
            @if ($errors->has('password'))
            <span class="text-danger">{{$errors->first('password')}}</span>
        @endif
        </div>
        <div class="form-group mb-3">
            <input type="password" name="password_confirmation" id="" class="form-control" placeholder="" required>
            @if ($errors->has('password_confirmation'))
            <span class="text-danger">
                {{$errors->first('password_confirmation')}}
            </span>
        @endif
        </div>
        <button type="submit" class="w-100 btn btn-lg btn-primary">Register</button>
    </form>
    <a href="{{route('home.index')}}" class="btn  btn-warning mt-4">Back</a>

@endsection