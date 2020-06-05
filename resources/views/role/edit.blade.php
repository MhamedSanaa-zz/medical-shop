@extends('layouts.app')

@section('title','role')

@section('content')
    <fieldset>
        <legend>edit role</legend>
        <form action="{{ route('roles.update', $role->id) }}" method="post">
        @csrf
        @method('PATCH')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="role">role</label>
                      <input type="text" name="role" class="form-control" value="{{ $role->role }}" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
            </div>
            <div class="rox">
                <button type="submit" class='btn btn-outline-success btn-block'>Change</button>
            </div>
        </form>
    </fieldset>
@endsection