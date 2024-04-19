@extends('layout')

@section('title', 'Registration')

@section('content')



<div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-auto" id="modalElement" style="margin-top: 2em;">
        <form action="{{route('registration.post')}}" class="form-inline justify-content-center" method="POST">
        @csrf
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">E-Mail</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}" />
            @if($errors->has('email'))
            <div class="error"><p style="color:red;">{{ $errors->first('email') }} </p> </div>
            @endif

            @if(session()->has('error')) 
              <div class="error"><p style="color:red;">{{ session('error') }} </p> </div>
            
            @endif

          </div>

          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name')}}" />
            @if($errors->has('name'))
    <div class="error"><p style="color:red;">{{ $errors->first('name') }} </p> </div>
            @endif
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" name="password" class="form-control" />
            @if($errors->has('password'))
            <div class="error"><p style="color:red;">{{ $errors->first('password') }} </p> </div>
            @endif
          </div>

          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">

            </div>



            <!-- Submit button -->
            <div class="text-center">
              <button type="submit" data-mdb-button-init data-mdb-ripple-init
                class="btn btn-primary btn-block mb-4">Entra</button>
            </div>
          </div>
      </div>
    </div>
    </form>



@endsection