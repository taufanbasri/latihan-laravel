@extends('layouts.master')

@section('content')

    <h1>Ubah Order untuk {{ $order->customer }}</h1>
    {!! Form::model($order, ['route' => ['orders.update', $order], 'method'=>'PUT']) !!}
        @include('orders._form')
    {!! Form::close() !!}

@endsection