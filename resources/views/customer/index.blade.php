@extends('layouts.app')

@section('title','customers')

@section('content')
<a href="{{ route('customers.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">add customer</a>
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
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->address }}</td>
        </tr>
        @endforeach
       </tbody>
    </table>
@endsection