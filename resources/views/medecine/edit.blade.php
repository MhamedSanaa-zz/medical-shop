@extends('layouts.app')

@section('content')

<div class="container my-5">
               <div class="card-body text-center">
                    <h4 class="card-title">update medecine </h4>
                    </div>
<form action="{{ route('medecine.update',$medecine->id) }}" method="post">
@csrf
@method('PATCH')
<div class="form-group">
<label for="name">name</label>
<input type="text" class="form-control" value="{{old('name') ?? $medecine->name}}" name="name">
@error('name')<div class="text-danger">{{ $message }}</div> @enderror

</div>

<div class="form-group">
<label for="generic">generic</label>
<input type="text" class="form-control" value="{{old('generic') ?? $medecine->generic}}" name="generic">
@error('generic')<div class="text-danger">{{ $message }}</div> @enderror

</div>



<div class="form-group">
<label for="type">type</label>
<select class="form-control" name="type_id">
@foreach ($types as $type)
<option value="{{$type->id}}" @if ($type->id == $medecine->type_id) selected="selected" @endif >{{$type->type}}</option>
@endforeach
</select>
</div>
<div class="form-group">
<label for="price">price</label>
<input type="price" class="form-control" value="{{old('price') ?? $medecine->price}}" name="price">
@error('price')<div class="text-danger">{{ $message }}</div> @enderror

</div>
<div class="form-group">
<label for="description">description</label>
<input type="description" class="form-control" value="{{old('description') ?? $medecine->description}}" name="description">
@error('description')<div class="text-danger">{{ $message }}</div> @enderror

</div>
<button type="submit" class="btn btn-success">update</button>
</form>
</div>

@endsection