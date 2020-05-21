@extends('layouts.app')

@section('title','suppliers')

@section('content')
    <fieldset>
        <legend>new customer</legend>
        <form action="{{ route('suppliers.store') }}" method="post">
        @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="name">name</label>
                      <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="phone">phone</label>
                      <input type="number" name="phone" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="address">address</label>
                      <input type="text" name="address" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="email">e-mail</label>
                      <input type='email' name="email" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
            </div>
            <div class="rox">
                <button type="submit" class='btn btn-outline-success btn-block'>ADD</button>
            </div>
        </form>
    </fieldset>
@endsection