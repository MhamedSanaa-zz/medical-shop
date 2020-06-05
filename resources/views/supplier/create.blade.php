@extends('layouts.app')
@section('content')
<h2 class="text-center">create supplier</h2>
<form action="{{route('supplier.store')}}" method="post">
@csrf 
<div class="form-group">
<label for="name">name</label>
<input type="text" name="name"  class="form-control">
@error('name')<div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="form-group">
<label for="phone">phone</label>
<input type="number" name="phone"  class="form-control">
@error('phone')<div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="form-group">
<label for="address">address</label>
<input type="text" name="address" class="form-control">
@error('address')<div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="form-group">
<label for="email">email</label>
<input type="text" name="email" class="form-control">
@error('email')<div class="text-danger">{{ $message }}</div> @enderror
</div>

<button type="submit" class="btn btn-success">save</button>
</form>
@endsection