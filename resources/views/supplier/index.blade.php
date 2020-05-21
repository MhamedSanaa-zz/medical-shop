@extends('layouts.app')

@section('title','suppliers')

@section('content')
<a href="{{ route('suplliers.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">add customer</a>
    <h1>lise of suppliers</h1>
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
       @foreach($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->name }}</td>
            <td>{{ $supplier->phone }}</td>
            <td>{{ $supplier->email }}</td>
            <td>{{ $supplier->address }}</td>
        </tr>
        @endforeach
       </tbody>
    </table>
@endsection