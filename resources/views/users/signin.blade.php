@extends('layouts.master')
@section('content')
        <div class="col-md-6 offset-md-3">
            <h1>Zaloguj się </h1>
            @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
        <form action="{{route('users.signin')}}" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                    <label for="password">Hasło</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                {{csrf_field()}}
                <button type="submit">Zaloguj się</button>
            </form>
        </div>
    @endsection
