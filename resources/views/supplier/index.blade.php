@extends('layouts.app')

@section('title','suppliers')

@section('content')
@if(session('ADDsupplier'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('ADDsupplier') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('EDITsupplier'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('EDITsupplier') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('DELsupplier'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('DELsupplier') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<a href="{{ route('suppliers.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">add supplier</a>
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
            <td>
              <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-outline-info">Edit</a>
              <a href="{{ route('suppliers.show', $supplier->id) }}" class="btn btn-outline-info">details</a>
              <a href="#" class="btn btn-outline-danger" 
                onclick="event.preventDefault();
                document.querySelector('#delete-form').submit()">Delete</a>
              <form id="delete-form" action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
              </form>
            </td>
        </tr>
        @endforeach
       </tbody>
    </table>
@endsection