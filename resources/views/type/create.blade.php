@extends('layouts.app')

@section('title','types')

@section('content')
    <fieldset>
        <legend>new type</legend>
        <form action="{{ route('type.store') }}" method="post">
        @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="type">type</label>
                      <input type="text" name="type" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
            </div>
            <div class="rox">
                <button type="submit" class='btn btn-outline-success btn-block'>ADD</button>
            </div>
        </form>
    </fieldset>
@endsection