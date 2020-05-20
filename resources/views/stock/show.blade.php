@extends('layouts.app')
@section('content')
<h2 class="text-center">stock details</h2>
@if (session('addstock'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('addstock') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">medecine name </th>
                <th scope="col">batch number</th>
                <th scope="col">quantity</th>
                <th scope="col">expiration date</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>


              </tr>
            </thead>
           
            <tbody>
              <tr>
              @foreach($medecines as $medecine)
                <td>{{$medecine->name}}</td>
                @endforeach
                <td>{{$stock->batch_nbr}}</td>
                <td> {{$stock->qty}}</td>
                <td> {{$stock->expiration_date}}</td>
                <td> <a href="{{ route('stock.edit', $stock->id) }}" class="btn"><i class="fas fa-pencil-alt " style="color:blue"></i>
	               </a> </td>
                   <td><a class="btn" data-toggle="modal" data-target="#confirmDeleteModal"><i class="fa fa-trash" style="color:red"></i></a></td>
                
	               



                
               
              </tr>
            </tbody>
            
          </table>   
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
          Are you sure to delete this stock ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-booking-form').submit();">Confirm delete</button>
        </div>
              <form id="delete-booking-form" action="{{ route('stock.destroy', $stock->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
@endsection