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
<div class="form-group">
<input type="hidden" name="supply_order_id" value="<?php echo $_GET["supplier_order_id"] ?>">
<button type="submit" class="btn btn-success">save</button>
<button type="reset" class="btn btn-primary">initialisation</button>
<a class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal">cancel the order</a>
</div>
</form>



<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">cancel order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure to cancel ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">cancel</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-booking-form').submit();">confirm</button>
        </div>
        <form id="delete-booking-form" action="{{ route('supplyOrder.destroy', $_GET['supplier_order_id']) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
</div>
@endsection