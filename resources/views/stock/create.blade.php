@extends('layouts.app')
@section('content')

<form action="{{route('stock.store')}}" method="post">
@csrf

<div class="form-group">
<label for="medecine_id">medecine</label>
<select name="medecine_id" class="form-control">
@foreach($medecines as $medecine)
<option value="{{$medecine->id}}">{{$medecine->name}}</option>
@endforeach
</select>
</div>

<div class="form-group">
<input type="hidden"  name="batch_nbr" value="<?php echo rand(0,10000000) ?>" >
@error('batch_nbr')<div class="text-danger">{{ $message }}</div> @enderror

</div>

<div class="form-group">
<label for="qty">quantity</label>
<input type="number" class="form-control" name="qty" >
@error('qty')<div class="text-danger">{{ $message }}</div> @enderror

</div>

<div class="form-group">
<label for="expiration_date">expiration date</label>
<input type="date" class="form-control" name="expiration_date" >
@error('expiration_date')<div class="text-danger">{{ $message }}</div> @enderror

</div>

<button type="submit" class="btn btn-primary">save</button>
</form>
@endsection