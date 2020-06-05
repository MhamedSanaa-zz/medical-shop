@extends('layouts.app')
@section('content')
<div class="container my-5">
    <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">medecine</th>
                <th scope="col">quantity</th>
                <th scope="col">batch number</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
                </tr>
            </thead>  
            
            <?php for($i=0;$i<count($medecines);$i++):?>
            <tbody>
                <tr>
               
                <td>{{$medecines[$i]['name']}}</td>
             
                <td>{{$supply_order_details[$i]['qty']}}</td>
                <td>{{$supply_order_details[$i]['batch_nbr']}}</td>
                <td><a href="{{ route('supplyOrderDetail.edit', $supply_order_details[$i]['id']) }}" class="btn"><i class="fas fa-pencil-alt " style="color:blue"></i>
	               </a></td>
                <td>kkk</td>
                </tr>
            </tbody>    
            <?php endfor;?>
    </table>

</div>
@endsection