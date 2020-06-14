@extends('layouts.app')

@section('title','customers')

@section('content')
<table class='table'>
       <thead>
        <tr>
            <th>name</th>
            <th>purchase date</th>
            <th>total</th>
        </tr>
       </thead>
       <tbody>
            <tr>
                <td>{{ $invoice->customer->name }}</td>
                <td>{{ $invoice->created_at }}</td>
                <?php $x=0 ?>
                    @foreach($invoice->medecines as $medecine)
                        <?php $x = $x+ ($medecine->price*$medecine->pivot->qty) ?>
                    @endforeach
                <td>
                    <?php echo $x ?>
                </td>
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
            <th>medecine total</th>
        </tr>
       </thead>
       <tbody>
        @foreach($invoice->medecines as $medecine)
            <tr>
                <td>{{ $medecine->name }}</td>
                <td>{{ $medecine->pivot->qty}}</td>
                <td>{{ $medecine->pivot->qty*$medecine->price}}</td>
            </tr>
            @endforeach
       </tbody>
    </table>
    </div>
@endsection