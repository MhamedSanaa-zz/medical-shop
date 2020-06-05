@extends('layouts.app')

@section('title','types')

@section('content')
@if(session('ADDtype'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('ADDtype') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('EDITtype'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('EDITtype') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('DELtype'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('DELtype') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<a href="{{ route('type.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">add role</a>
    <h1>lise of types</h1>
    <table class='table'>
       <thead>
        <tr>
            <th>name</th>
        </tr>
       </thead>
       <tbody>
       @foreach($types as $type)
        <tr>
            <td>{{ $type->type }}</td>
            <td>
              <a href="{{ route('type.edit', $type->id) }}" class="btn btn-outline-info">Edit</a>
              <a href="#" class="btn btn-outline-danger" 
                onclick="event.preventDefault();
                document.querySelector('#delete-form').submit()">Delete</a>
              <form id="delete-form" action="{{ route('type.destroy', $type->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
              </form>
            </td>
        </tr>
        @endforeach
       </tbody>
    </table>
@endsection