@extends('layouts.app')

@section('title','suppliers')

@section('content')
<table class='table'>
       <thead>
        <tr>
            <th>name</th>
            <th>phone</th>
            <th>email</th>
            <th>address</th>
        </tr>
       </thead>
       <tbody>
        <tr>
            <td>{{ $supplier->name }}</td>
            <td>{{ $supplier->phone }}</td>
            <td>{{ $supplier->email }}</td>
            <td>{{ $supplier->address }}</td>
        </tr>
<table class='table'>
       <thead>
        <tr>
            <th>invoice list</th>
       </thead>
       <tbody>
       @foreach($supplier->supply_orders as $supply_order)
            <tr>
                <td>{{ $supply_order->id }}</td>
                <td>{{ $supply_order->created_at }}</td>
                
            </tr>
        @endforeach
       </tbody>
    </table>
@endsection