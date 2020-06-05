@extends('layouts.app')
@section('content')

             
<a href="{{route('stock.create')}}" class="float-right"><button class="btn btn-primary">add stock</button> </a> 
@if (session('addstock'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('addstock') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif               
 <div class="row">
       <div class="col">
       <h3>active stocks</h3>
             <ul class="list-group">
             
             @foreach($data as $stock)
                <?php if ($stock->expiration_date > now()): ?>
             <a href="{{route('stock.show',$stock->id)}}"> <li class="list-group-item list-group-item-action">{{$stock->name}} <span class="badge badge-primary badge-pill float-right">{{$stock->qty}}</span></li> </a> 
                <?php endif; ?>
               @endforeach
               </ul>
       </div>
 


       <div class="col">
       <h3>expired stock</h3>
             <ul class="list-group">
             @foreach($data as $stock)
                <?php if ($stock->expiration_date <= now()): ?>
            <a href="{{route('stock.show',$stock->id)}}">  <li class="list-group-item list-group-item-action">{{$stock->name}} <span class="badge badge-primary badge-pill float-right">{{$stock->qty}}</span></li> </a> 
                <?php endif; ?>
               @endforeach
               </ul>
       </div>
</div> 




@endsection