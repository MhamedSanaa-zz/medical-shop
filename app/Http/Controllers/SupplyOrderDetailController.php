<?php

namespace App\Http\Controllers;
use App\medecine;
use App\supply_order;
use App\supply_order_detail;
use Illuminate\Http\Request;
use DB;
class SupplyOrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supply_order_details =supply_order_detail::all();
        //$data=DB::table('supply_order_details')->join('supply_orders','supply_orders.id','=','supply_order_details.supply_order_id')->select('stocks.id','stocks.qty','stocks.expiration_date','stocks.batch_nbr','medecines.name')
        //->get();
        $supplierName=DB::table('suppliers')->join('supply_orders','supply_orders.supplier_id','=','suppliers.id')->select('suppliers.name','supply_orders.id','supply_orders.created_at')->orderBy('supply_orders.id', 'DESC')
        ->get();
        $medecineName=DB::table('medecines')->join('supply_order_details','medecines.id','=','supply_order_details.medecine_id')->select('medecines.name','supply_order_details.id','supply_order_details.qty','supply_order_details.batch_nbr','supply_order_details.supply_order_id')->orderBy('supply_order_details.id', 'DESC')
        ->get();
        return view('supplyOrderDetail.index',compact('supplierName','medecineName','supply_order_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medecines = medecine::all();
        return view ('supplyOrderDetail.create',compact('medecines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        foreach($request->qty as $qty)
        {
            if ($qty != null)
            {
                $data [] = $qty;
            }
        }
        for ( $i=0 ; $i<count($request->checkbox);$i++)
        {
            
            
                $supply_order_detail= new supply_order_detail();
                $supply_order_detail->medecine_id=$request->checkbox[$i];
                $supply_order_detail->supply_order_id=$request->supply_order_id;
                $supply_order_detail->batch_nbr=rand(0,1000000);
                $supply_order_detail->qty=$data[$i];
                $supply_order_detail->save();
        }
        

        return redirect()->route('supplyOrderDetail.index')->with('addsupplier','supply order added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\supply_order_detail  $supply_order_detail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supply_order_details=supply_order_detail::where('supply_order_id',$id)->get();
        foreach ($supply_order_details as $supply_order_detail)
        {
            $medecines []=medecine::where('id',$supply_order_detail->medecine_id)->first();
        }
        //return dd($medecines);
        return view('supplyOrderDetail.show',compact('supply_order_details'))->with('medecines',$medecines);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\supply_order_detail  $supply_order_detail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supply_order_detail=supply_order_detail::where('id',$id)->first();
        $medecines=medecine::all();
        
        return view('supplyOrderDetail.edit',compact('supply_order_detail','medecines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\supply_order_detail  $supply_order_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$validatedData=$request->validate($this->validationRules());
       $supply_order_detail= supply_order_detail::where('id',$id)->first();
        $supply_order_detail->medecine_id=$request->medecine_id;
        $supply_order_detail->qty=$request->qty;
        $supply_order_detail->update();


        
        return redirect()->route('supplyOrderDetail.index')->with('addsupplier','order updated successfully');
       
                      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\supply_order_detail  $supply_order_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        supply_order_detail::where('id',$id)->delete();
        return redirect()->route('supplyOrderDetail.index')->with('addsupplier','order deleted successfully');
    }
    
    private function validationRules()
    {
        return [
            'medecine' => 'required',
            'qty' => 'required',
        
        ];
    }
}
