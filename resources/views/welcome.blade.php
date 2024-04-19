@extends('layout')

@section('content')
@auth

<div> <h2 class="text-center">Welcome</h2>
<h1 class="text-center">{{auth()->user()->name}}</h1>
</div>

@endauth
@endsection