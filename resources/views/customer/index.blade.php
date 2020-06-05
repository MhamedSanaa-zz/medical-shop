@extends('layouts.app')

@section('title','customers')

@section('content')
@if(session('ADDcustomer'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('ADDcustomer') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('DELcustomer'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('DELcustomer') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('EDITcustomer'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('EDITcustomer') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<a href="{{ route('customer.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">add customer</a>
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
            <td>
              <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-outline-info">Edit</a>
              <a href="{{ route('customer.show', $customer->id) }}" class="btn btn-outline-info">details</a>
              <a href="#" class="btn btn-outline-danger" 
                onclick="event.preventDefault();
                document.querySelector('#delete-form').submit()">Delete</a>
              <form id="delete-form" action="{{ route('customer.destroy', $customer->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
              </form>
            </td>
        </tr>
        @endforeach
       </tbody>
    </table>
@endsection