@extends('layouts.app')
@section('content')
<h2>edit stock</h2>
<form action="{{route('stock.update',$stock->id)}}" method="post">
@csrf
@method('PATCH')
<div class="form-group">
<select name="medecine_id" class="form-control">
@foreach ($medecines as $medecine)
<option value="{{$medecine->id}}" @if ($stock->medecine_id == $medecine->id) selected="selected" @endif>{{$medecine->name}}</option>
@endforeach
</select>
</div>

<div class="form-group">
<label for="batch_nbr">batch number</label>
<input type="number" class="form-control" value="{{old('batch_nbr')?? $stock->batch_nbr}}" name="batch_nbr">
</div>

<div class="form-group">
<label for="qty">quantity</label>
<input type="number" class="form-control" value="{{old('qty')?? $stock->qty}}" name="qty">
</div>

<div class="form-group">
<label for="expiration_date">expiration date</label>
<input type="date" class="form-control" value="{{old('expiration_date')?? $stock->expiration_date}}" name="expiration_date">
</div>
<button type="submit" class="btn btn-primary">save</button>
<button type="reset" class="btn btn-danger">cancel</button>
</form>

@endsection