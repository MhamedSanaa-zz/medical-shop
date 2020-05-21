@extends('layouts.app')

@section('title','invoices')

@section('content')
<a href="{{ route('invoice.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">add customer</a>
    <h1>lise of customers</h1>
    <table class='table'>
       <thead>
        <tr>
            <th>name</th>
            <th>phone</th>
            <th>eamil</th>
            <th>address</th>
        </tr>
       </thead>
       <tbody>
       @foreach($customers as $customer)
        <tr>
            <td>{{ $invoice->name }}</td>
            <td>{{ $invoice->phone }}</td>
            <td>{{ $invoice->email }}</td>
            <td>{{ $invoice->address }}</td>
        </tr>
        @endforeach
       </tbody>
    </table>
@endsection