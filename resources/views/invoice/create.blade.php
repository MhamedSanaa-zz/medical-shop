@extends('layouts.app')

@section('title','customers')

@section('content')
    <fieldset>
        <legend>new invoice </legend>
        <form action="{{ route('invoice.store') }}" method="post">
        @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">choose customer</label>
                        <select name="customer_id" class="form-control">
                            @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                            @endforeach 
                        </select>
                    </div>
                </div>
            </div>
            <div class="rox">
                <button type="submit" class='btn btn-outline-success btn-block'>ADD</button>
            </div>
        </form>
    </fieldset>
@endsection