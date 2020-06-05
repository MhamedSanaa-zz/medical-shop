@extends('layouts.app')

@section('title','customers')

@section('content')
    <fieldset>
        <legend>edit customer</legend>
        <form action="{{ route('customers.update', $customer->id) }}" method="post">
        @csrf
        @method('PATCH')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="name">name</label>
                      <input type="text" name="name" class="form-control" value="{{ $customer->name }}" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="phone">phone</label>
                      <input type="number" name="phone" class="form-control" value="{{ $customer->phone }}" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="address">address</label>
                      <input type="text" name="address" class="form-control" value="{{ $customer->address }}" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="email">e-mail</label>
                      <input type='email' name="email" class="form-control" value="{{ $customer->email }}" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
            </div>
            <div class="rox">
                <button type="submit" class='btn btn-outline-success btn-block'>Change</button>
            </div>
        </form>
    </fieldset>
@endsection