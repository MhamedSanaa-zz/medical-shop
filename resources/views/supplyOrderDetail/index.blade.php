@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        <h3>supply orders </h3>
        <ul class="list-group">
        @foreach($supplierName as $supplier)
        
        <a href="{{route('supplyOrderDetail.show',$supplier->id)}}"><li class="list-group-item list-group-item-action">supply ordred from {{$supplier->name}} <span class="float-right">{{$supplier->created_at}} </span></li></a>
        
        @endforeach
        </ul>
        </div>
    </div>
</div>

@endsection