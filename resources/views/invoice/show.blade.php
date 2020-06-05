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
    <label for="">purchased medecine</label>
        <ul>
            @foreach($invoice->medecines as $medecine)
                <li>{{ $medecine->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection