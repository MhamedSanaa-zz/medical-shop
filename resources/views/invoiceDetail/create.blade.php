@extends('layouts.app')

@section('title','customers')

@section('content')
    <fieldset>
        <legend>new invoice </legend>
        <form action="{{ route('invoiceDetail.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col"><a class="btn btn-danger float-right" data-toggle="modal" data-target="#confirmDeleteModal">cancel the order</a></div>
        </div>
            <div class="row">
                <div class="col">
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
                        <input type="number" class="form-control" name="qty[]">
                    </div>
                    <div class="form-group">
                    <input type="button" class='btn btn-outline-primary btn-block' value="Add medecine" onclick="generateinput()">
                    </div>
                </div>
            </div>
            <div id="inputfield">
            </div>
            <div class="rox">
                
                <button type="submit" class='btn btn-outline-success btn-block'>ADD</button>
            </div>
            <input type="hidden" name="invoice_id" value="<?php echo $_GET['invoice_id']  ?>">
        </form>
        <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">cancel order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure to cancel ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">cancel</button>
          <button type="button" class="btn btn-outline-danger"
            onclick="event.preventDefault();
            document.querySelector('#delete-invoice-form').submit();">confirm</button>
        </div>
        <form id="delete-invoice-form" action="{{ route('invoice.destroy', $_GET['invoice_id']) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
</div>
    </fieldset>
    <script>
    function generateinput()
    {
        var inputfield = document.getElementById('inputfield');
        var newinput = document.createElement('div');
        newinput.innerHTML='<div class="row"><div class="col"><div class="form-group"><label for="name">choose medecine</label><select name="medecine_id[]" class="form-control">@foreach($medecines as $medecine)<option value="{{$medecine->id}}">{{$medecine->name}}</option>@endforeach </select></div><div class="form-group"><label for="name">enter quantity</label><input type="number" class="form-control" name="qty[]"></div></div></div>';
        inputfield.appendChild(newinput);
    }
    </script>
@endsection