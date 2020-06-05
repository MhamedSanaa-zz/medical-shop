@extends('layouts.app')
@section('content')

<div class="container my-5">
               <div class="card-body text-center">
                    <h4 class="card-title">list suppliers</h4>
                    <div class="card">
                    @if (session('addsupplier'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('addsupplier') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<a href="{{route('supplyOrder.index')}}"><button class="btn btn-primary">add supply order</button></a>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">phone</th>
                <th scope="col">address</th>
                <th scope="col">email</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>


              </tr>
            </thead>
            @foreach ($suppliers as $supplier)
            <tbody>
              <tr>
                <td>{{$supplier->name}}</td>
                <td>{{$supplier->phone}}</td>
                <td> {{$supplier->address}}</td>
                <td> {{$supplier->email}}</td>
                <td> <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn"><i class="fas fa-pencil-alt " style="color:blue"></i>
	               </a> </td>
                <td><a class="btn" data-toggle="modal" data-target="#confirmDeleteModal"><i class="fa fa-trash" style="color:red"></i></a></td>



                
               
              </tr>
            </tbody>
            @endforeach
          </table>   
          <a href="{{ route('supplier.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button"
    aria-pressed="true">add supplier</a>
               </div>
              </div>
              
              <!-- Modal -->
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
          Are you sure to delete this supplier ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-booking-form').submit();">Confirm delete</button>
        </div>
              <form id="delete-booking-form" action="{{ route('supplier.destroy', $supplier->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
              @endsection