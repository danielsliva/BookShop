@extends('layouts.master')
@section('title')
Bookarium
@endsection
@section('content')
@foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
            <div class="col-sm-6 col-md-4 py-4">
                    <div class="card" >
                    <img src="{{ $product->imagePath}}" class="card-img-top img-responsive" alt="Hari Pota">
                            <div class="card-body">
                            <h5 class="card-title">{{ $product->title}}</h5>
                            <p class="card-text">{{ $product->description}}</p>
                            <div class="clearfix">
                            <div class="pull-left price" style="float: left !important">{{ $product->price}} zł </div>
                            <a href="" class="btn btn-success" style="float: right !important">Kup</a>
                        </div>
                    </div>
                </div>
                </div>
            @endforeach
        </div>
        @endforeach
@endsection
