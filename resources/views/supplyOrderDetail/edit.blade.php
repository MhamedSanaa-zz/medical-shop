@extends('layouts.app')
@section('content')

<form action="{{route('supplyOrderDetail.update',$supply_order_detail)}}" method="post">
@csrf 
@method('PATCH')
<div class="form-group">
<label for="medecine">medecine</label>
    <select name="medecine_id" class="form-control">
    @foreach($medecines as $medecine)
    <option @if ($medecine->id == $supply_order_detail->medecine_id) selected="selected" @endif value="{{ $medecine->id}}">{{$medecine->name}}</option>
    @endforeach
    </select>
</div>

<div class="form-group">
<label for="">quantity</label>
<input type="text" name="qty" value="{{old('qty') ?? $supply_order_detail->qty}}" class="form-control">
@error('qty')<div class="text-danger">{{ $message }}</div> @enderror
</div>


<button type="submit" class="btn btn-success">save</button>
<button type="reset" class="btn btn-danger">cancel</button>
</form>
@endsection