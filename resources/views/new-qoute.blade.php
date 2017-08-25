@extends('master')

@section('body')
    {!! Form::open() !!}
        <legend>New Quote</legend>
        @include('_quote-form')
    {!! Form::close() !!}
@endsection