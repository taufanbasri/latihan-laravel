@extends('master')

@section('body')
    {!! Form::model($quote, ['url'=>'/quote/' . $quote->id, 'method'=>'put']) !!}
        <legend>Update Quote</legend>
        @include('_quote-form')
    {!! Form::close() !!}
@endsection