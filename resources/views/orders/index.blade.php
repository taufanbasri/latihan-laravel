@extends('layouts.master')

@section('content')
    <h1>Domino Martabak - Order</h1>
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Customer</th>
            <th>Tipe</th>
            <th>Jumlah</th>
            <th>Alamat</th>
            <th>Tanggal Order</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach (App\Order::all() as $order)
            <tr>
                <td><a href="{{ route('orders.show', $order) }}">{{ $order->customer }}</a></td>
                <td>{{ $order->tipe }}</td>
                <td>{{ $order->jumlah }}</td>
                <td>{{ $order->alamat }}</td>
                <td>{{ $order->created_at->format('M d, Y') }}</td>
                <td>
                    {!! Form::model($order, ['route' => ['orders.destroy', $order], 'method' => 'delete', 'class' => 'form-inline']) !!}
                        <a href="{{ route('orders.edit', $order) }}">Edit</a> |
                        {!! Form::submit('delete', ['class' => 'btn btn-xs btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop