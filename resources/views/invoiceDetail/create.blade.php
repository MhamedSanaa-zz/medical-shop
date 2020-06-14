@extends('layouts.app')

@section('title','customers')

@section('content')
    <fieldset>
        <legend>new invoice </legend>
        <form action="{{ route('invoiceDetail.store') }}" method="post">
        @csrf
            <div class="row">
                <div class="col">
                <?php echo $_GET['invoice_id']  ?>
                    <div class="form-group">
                        <label for="name">choose medecine</label>
                        <select name="medecine_id[]" class="form-control">
                            @foreach($medecines as $medecine)
                            <option value="{{$medecine->id}}">{{$medecine->name}}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">enter quantity</label>
                        <input type="number" name="qty[]">
                    </div>
                </div>
            </div>
            <div id="inputfield">
            </div>
            <div class="rox">
                <input type="button" value="Click me" onclick="generateinput()">
                <button type="submit" class='btn btn-outline-success btn-block'>ADD</button>
            </div>
            <input type="hidden" name="invoice_id" value="<?php echo $_GET['invoice_id']  ?>">
        </form> 
    </fieldset>
    <script>
    function generateinput()
    {
        var inputfield = document.getElementById('inputfield');
        var newinput = document.createElement('div');
        newinput.innerHTML='<div class="row"><div class="col"><div class="form-group"><label for="name">choose medecine</label><select name="medecine_id[]" class="form-control">@foreach($medecines as $medecine)<option value="{{$medecine->id}}">{{$medecine->name}}</option>@endforeach </select></div><div class="form-group"><label for="name">enter quantity</label><input type="number" name="qty[]"></div></div></div>';
        inputfield.appendChild(newinput);
    }
    </script>
@endsection