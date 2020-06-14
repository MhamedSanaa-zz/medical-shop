@extends('layouts.app')

@section('title','customers')

@section('content')
<table class='table'>
       <thead>
        <tr>
            <th>name</th>
            <th>purchase date</th>
        </tr>
       </thead>
       <tbody>
            <tr>
                <td>{{ $invoice->customer->name }}</td>
                <td>{{ $invoice->created_at }}</td>
            </tr>
        </a>
       </tbody>
    </table>
    <div>
    <table class='table'>
       <thead>
        <tr>
            <th>medecine name</th>
            <th>Quantity</th>
        </tr>
       </thead>
       <tbody>
        @foreach($invoice->medecines as $medecine)
            <tr>
                <td>{{ $medecine->name }}</td>
                <td>{{ $medecine->pivot->qty}}</td>
            </tr>
            @endforeach
       </tbody>
    </table>
    </div>
@endsection