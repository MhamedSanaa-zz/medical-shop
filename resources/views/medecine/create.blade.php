@extends('layouts.app')

@section('content')
<form action="{{ route('medecine.store') }}" method="post">
@csrf
<div class="form-group">
<label for="name">name</label>
<input type="text" class="form-control" value="{{ old('name') }}" name="name">
@error('name')<div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="form-group">
<label for="generic">generic</label>
<input type="text" class="form-control" value="{{ old('generic') }}" name="generic">
@error('generic')<div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="form-group">
<label for="type">type</label>
<select class="form-control" name="type">
@foreach ($types as $type)
<option value="{{$type->id}}" >{{$type->type}}</option>
@endforeach"
</select>
</div>


<div class="form-group">
<label for="price">price</label>
<input type="price" class="form-control" value="{{ old('price') }}" name="price">
@error('price')<div class="text-danger">{{ $message }}</div> @enderror

</div>
<div class="form-group">
<label for="description">description</label>
<input type="description" class="form-control" value="{{ old('description') }}" name="description">
@error('description')<div class="text-danger">{{ $message }}</div> @enderror

</div>
<button type="submit" class="btn btn-success">add medecine</button>
</form>

@endsection