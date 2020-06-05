@extends('layouts.app')

@section('title','customers')

@section('content')
    <fieldset>
        <legend>new role</legend>
        <form action="{{ route('role.store') }}" method="post">
        @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="role">role</label>
                      <input type="text" name="role" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
            </div>
            <div class="rox">
                <button type="submit" class='btn btn-outline-success btn-block'>ADD</button>
            </div>
        </form>
    </fieldset>
@endsection