@extends('layouts.app')

@section('title','invoices')

@section('content')
<a href="{{ route('invoice.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">add invoice</a>
    <h1>lise of invoices</h1>
    <table class='table table-hover'>
       <thead>
        <tr>
            <th>customer name</th>
            <th>purchase date</th>
        </tr>
       </thead>
       <tbody>
       @foreach($invoices as $invoice)
        <a href="">
            <tr  onclick="document.location='{{ route('invoice.show', $invoice->id) }}'" style="cursor:pointer">
                <td>{{ $invoice->customer->name }}</td>
                <td>{{ $invoice->created_at }}</td>
                
            </tr>
        </a>
        @endforeach
       </tbody>
    </table>
@endsection