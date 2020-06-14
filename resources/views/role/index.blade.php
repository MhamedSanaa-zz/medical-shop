@extends('layouts.app')

@section('title','roles')

@section('content')
@if(session('ADDrole'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('ADDrole') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('EDITrole'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('EDITrole') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('DELrole'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('DELrole') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<a href="{{ route('role.create') }}" class="btn btn-outline-primary btn-lg float-right" type="button" aria-pressed="true">add role</a>
    <h1>lise of roles</h1>
    <table class='table'>
       <thead>
        <tr>
            <th>name</th>
        </tr>
       </thead>
       <tbody>
       @foreach($roles as $role)
        <tr>
            <td>{{ $role->role }}</td>
            <td>
              <a href="{{ route('role.edit', $role->id) }}" class="btn btn-outline-info">Edit</a>
              <a href="#" class="btn btn-outline-danger" 
                onclick="event.preventDefault();
                document.querySelector('#delete-form').submit()">Delete</a>
              <form id="delete-form" action="{{ route('role.destroy', $role->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
              </form>
            </td>
        </tr>
        @endforeach
       </tbody>
    </table>
    {{ $roles->links() }}
@endsection