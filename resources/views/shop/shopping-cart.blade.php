@extends('layouts.master')
@section('title')
Bookarium
@endsection
@section('content')
<div class="col-md-6 offset-md-3">
    @if(Session::has('cart'))
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <ul class="list-group">
                @foreach($products as $product)
                    <li class="list-group-item">
                    <span class="badge">{{$product['qty']}}</span>
                    <strong>{{$product['item']['title']}}</strong>
                    <span class="label label-success">{{$product['price']}}</span>
                    <div class="btn-group">
                        <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="caret">Akcja</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="">Reduce by 1</a></li>
                            <li><a href="">Reduce all</a></li>
                        </ul>
                    </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
            <div class="col-md-6 offset-md-3">
                <strong>Total: {{$totalPrice}}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Zamów</a>
            </div>
    </div>
    @else
    <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif
</div>
@endsection
