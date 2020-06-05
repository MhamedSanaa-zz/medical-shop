@extends('layouts.app')

@section('title','type')

@section('content')
    <fieldset>
        <legend>edit type</legend>
        <form action="{{ route('type.update', $type->id) }}" method="post">
        @csrf
        @method('PATCH')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="type">type</label>
                      <input type="text" name="type" class="form-control" value="{{ $type->type }}" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
            </div>
            <div class="rox">
                <button type="submit" class='btn btn-outline-success btn-block'>Change</button>
            </div>
        </form>
    </fieldset>
@endsection