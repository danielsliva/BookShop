@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-md-4 col-md-offset-4 py-4">
            <h1>Zarejestruj się </h1>
            @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
        <form action="{{route('users.signup')}}" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                    <label for="password">Hasło</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                {{csrf_field()}}
                <button type="submit">Zarejestruj się</button>
            </form>
        </div>
    </div>
    @endsection
