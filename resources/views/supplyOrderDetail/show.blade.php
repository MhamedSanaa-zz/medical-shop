@extends('layouts.app')
@section('content')
<div class="container my-5">

@if(session('addsupplier'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('addsupplier') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
    <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">medecine</th>
                <th scope="col">quantity</th>
                <th scope="col">batch number</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
                </tr>
            </thead>  
            
            <?php for($i=0;$i<count($medecines);$i++):?>
            <tbody>
                <tr>
               
                <td>{{$medecines[$i]['name']}}</td>
             
                <td>{{$supply_order_details[$i]['qty']}}</td>
                <td>{{$supply_order_details[$i]['batch_nbr']}}</td>
                <td><a href="{{ route('supplyOrderDetail.edit', $supply_order_details[$i]['id']) }}" class="btn"><i class="fas fa-pencil-alt " style="color:blue"></i>
	               </a></td>
                <td><a class="btn" data-toggle="modal" data-target="#confirmDeleteModal"><i class="fa fa-trash" style="color:red"></i></a></td>
                </tr>
            </tbody>
            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete booking</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure to delete this medecine ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-order-form').submit();">Confirm delete</button>
        </div>
            <form id="delete-order-form" action="{{ route('supplyOrderDetail.destroy', $supply_order_details[$i]['id']) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>    
            <?php endfor;?>
    </table>

</div>
@endsection