@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
    @auth
        <h1>Dashboard</h1>

        @can('isAdmin')
        <button class="btn btn-success btn-lg">Adminn Access</button>
        @elsecan('isManager')
        <button class="btn btn-success btn-lg">Manager Access</button>
        @else
        <button class="btn btn-success btn-lg">User Access</button>
        @endcan
    @endauth

    @guest
        <h1>Home Page</h1>
        <p>You are in home page</p>
    @endguest
</div>
@endsection