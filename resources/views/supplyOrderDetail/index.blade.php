@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        <a href="{{route('supplyOrder.index')}}" class="float-right"> <button class="btn btn-primary">add order</button> </a>
        <h3 class="text-center ">supply orders </h3>
      <br>
      @if(session('addsupplier'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ session('addsupplier') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
        <ul class="list-group">
        @foreach($supplierName as $supplier)
        
        <a href="{{route('supplyOrderDetail.show',$supplier->id)}}"><li class="list-group-item list-group-item-action">supply ordred from {{$supplier->name}} <span class="float-right">{{$supplier->created_at}} </span></li></a>
        
        @endforeach
        </ul>
        </div>
    </div>
</div>

@endsection