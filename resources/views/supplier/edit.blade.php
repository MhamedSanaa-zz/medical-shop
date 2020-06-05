@extends('layouts.app')
@section('content')
<h2 class="text-center">edit supplier</h2>
<form action="{{route('supplier.update',$supplier->id)}}" method="post">
@csrf 
@method('PATCH')
<div class="form-group">
<label for="name">name</label>
<input type="text" name="name" value="{{old('name') ?? $supplier->name}}"  class="form-control">
@error('name')<div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="form-group">
<label for="phone">phone</label>
<input type="text" name="phone" value="{{old('phone') ?? $supplier->phone}}" class="form-control">
@error('phone')<div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="form-group">
<label for="address">address</label>
<input type="text" name="address" value="{{old('address') ?? $supplier->address}}" class="form-control">
@error('address')<div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="form-group">
<label for="email">email</label>
<input type="text" name="email" value="{{old('email') ?? $supplier->email}}" class="form-control">
@error('email')<div class="text-danger">{{ $message }}</div> @enderror
</div>

<button type="submit" class="btn btn-success">save</button>
<button type="reset" class="btn btn-danger">cancel</button>

</form>

@endsection