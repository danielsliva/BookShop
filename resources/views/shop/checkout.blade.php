@extends('layouts.master')
@section('title')
Bookarium
@endsection
@section('content')


<div class="col-md-6 offset-md-3">
        <span class="anchor" id="formPayment"></span>
        <hr class="my-5">

        <!-- form card cc payment -->
        <div class="card card-outline-secondary">
            <div class="card-body">
                <h3 class="text-center">Formularz płatności</h3>
                <hr>
                <div id="charge-error" class="alert alert-danger" {{ !Session::has('error') ? 'hidden' : ''  }}>
                    {{ Session::get('error') }}
                </div>
            <form action="{{ route('checkout')}}" method="post" class="form" role="form" autocomplete="off" id="checkout-form">
                    <div class="form-group">
                        <label for="cc_name">Nazwa</label>
                        <input type="text" name="name" class="form-control" id="name" title="First and last name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="cc_name">E-mail</label>
                        <input type="email" name="address" class="form-control" id="address" title="Address email" required="required">
                    </div>
                    <div class="form-group">
                        <label for="cc_name">Imię i nazwisko właściciela karty</label>
                        <input type="text" name="ownerName" class="form-control" id="card-name" pattern="\w+ \w+.*" title="First and last name" required="required">
                    </div>
                    <div class="form-group">
                        <label>Numer karty</label>
                        <input type="text" name="cadrNumber" class="form-control" id="card-number" autocomplete="off" maxlength="16" pattern="\d{16}" title="Credit card number" required="">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-12">Data wydania karty</label>
                        <div class="col-md-4">
                            <select id="card-expiry-month" class="form-control" name="cardMonth" size="0" required="required">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select id="card-expiry-year" class="form-control" name="cardYear" size="0" required="required">
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input id="card-cvc" name="CVC" type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="" placeholder="CVC">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-12">Do zapłaty</label>
                    </div>
                    <div class="form-inline">
                        <div>
                            <h2> {{$total}}zł <h2>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <button type="reset" class="btn btn-default btn-lg btn-block">Cancel</button>
                        </div>
                        <div class="col-md-6">
                                {{ csrf_field() }}
                            <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
@section('scripts')
<script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
@endsection
