@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-md-6 offset-md-3">
            <h1> Profil użytkownika </h1>
            <hr>
            <h2>Moje zamowienia</h2>
            @foreach($orders as $order)
            <div class="panel panel-defoult">
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                        <li class="list-group-item"><span class="badge">
                            {{ $item['price']}} zł
                        </span>
                            {{$item['item']['title']}} | {{ $item['qty']}} szt.
                        </li>
                        @endforeach
                      </ul>
                </div>
                <div class="panel-footer">
                    <strong> Cena finalna: {{ $order->cart->totalPrice}} zł </strong>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
</div>
@endsection
