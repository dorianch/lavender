@extends('cart.checkout')

@section('head.title')
    Checkout
@stop

@section('content')

    <h4>Your Shipping Information:</h4>

    @workflow('cart_shipment')

@stop