@extends('layouts.app')
@section('content')

<a href="{{route('supplyOrderDetail.index')}}"><button class="btn btn-info float-right">show supply orders</button></a>
<form action="{{route('supplyOrder.store')}}" method="post">
@csrf
<div class="form-group">
<label for="">choose your supplier</label>
<select name="supplier_id" class="form-control">
@foreach($suppliers as $supplier)
<option value="{{$supplier->id}}">{{$supplier->name}}</option>
@endforeach 
</select>
</div>
<button type="submit" class="btn btn-success ">go </button>
</form>
{{ $customers->links() }}
@endsection