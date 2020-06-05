@extends('layouts.app')

@section('title','customers')

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
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->address }}</td>
        </tr>
<table class='table'>
       <thead>
        <tr>
            <th>supply orders list</th>
       </thead>
       <tbody>
       @foreach($customer->invoices as $invoice)
            <tr>
                <td>{{ $invoice->id }}</td>
                <td>{{ $invoice->created_at }}</td>
                
            </tr>
        @endforeach
       </tbody>
    </table>
@endsection