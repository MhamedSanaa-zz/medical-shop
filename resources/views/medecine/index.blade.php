@extends('layouts.app')

@section('content')





<div class="container my-5">
               <div class="card-body text-center">
                    <h4 class="card-title">list medecines</h4>
                    <div class="card">
                    @if (session('addmedecine'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('addmedecine') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">generic</th>
                <th scope="col">type</th>
                <th scope="col">description</th>
                <th scope="col">price</th>
                <th scope="col">status</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>


              </tr>
            </thead>
            @foreach ($medecines as $medecine)
            <tbody>
              <tr>
                <td>{{$medecine->name}}</td>
                <td>{{$medecine->generic}}</td>
                @foreach($types as $type)
                @if ($medecine->type_id==$type->id)
                <td> {{$type->type}}</td>
                @endif
                @endforeach
                <td> {{$medecine->description}}</td>
                <td> {{$medecine->price}}</td>
                @if($medecine->status != 1)
                <td >not available</td>
                @else
                <td >available</td>
                @endif
                <td> <a href="{{ route('medecine.edit', $medecine->id) }}" class="btn"><i class="fas fa-pencil-alt " style="color:blue"></i>
	               </a> </td>
                <td><a class="btn" data-toggle="modal" data-target="#confirmDeleteModal"><i class="fa fa-trash" style="color:red"></i></a></td>



                
               
              </tr>
            </tbody>
            @endforeach
          </table>   
          <a href="{{ route('medecine.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button"
    aria-pressed="true">add medecine</a>
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
          Are you sure to delete this medecine ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-booking-form').submit();">Confirm delete</button>
        </div>
              <form id="delete-booking-form" action="{{ route('medecine.destroy', $medecine->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
              @endsection