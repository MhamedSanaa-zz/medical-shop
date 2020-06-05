@extends('layouts.app')
@section('content')
<div class="container my-5">
               <div class="card-body text-center">
                    <h4 class="card-title">choose your order details</h4>
               </div>
<form action="{{route('supplyOrderDetail.store')}}" method="post">
@csrf
<div class="card">
<table class="table table-hover">
    <thead>
        <tr>
        <th >coche</th>
        <th >medecine</th>
        <th >quantity</th>
        </tr>
    </thead>
    @foreach ($medecines as $medecine)
    <tbody>
    <tr>
    <th ><input type="checkbox" name="checkbox[]" value="{{$medecine->id}}" ></th>
    <td>{{$medecine->name}}</td>
    <td><input type="number" name="qty[]" class="form-control"  placeholder="insert the quantity" ></td>
    </tr>
    </tbody>
    
    @endforeach
</table>
</div>

<input type="hidden" name="supply_order_id" value="<?php echo $_GET["supplier_order_id"] ?>">
<button type="submit" class="btn btn-primary">save</button>
<button type="reset" class="btn btn-danger">cancel</button>
</form>
</div>
@endsection