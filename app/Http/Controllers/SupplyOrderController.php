<?php

namespace App\Http\Controllers;
use App\supplier;
use App\supply_order;
use Illuminate\Http\Request;

class SupplyOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers=supplier::all();
        return view('supply_order.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $supply_order=new supply_order();
        $supply_order->supplier_id=$request->supplier_id;
        $supply_order->save();
        $supplier_order_id=$supply_order->id;
        return redirect()->route('supplyOrderDetail.create',compact('supplier_order_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\supply_order  $supply_order
     * @return \Illuminate\Http\Response
     */
    public function show(supply_order $supply_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\supply_order  $supply_order
     * @return \Illuminate\Http\Response
     */
    public function edit(supply_order $supply_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\supply_order  $supply_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, supply_order $supply_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\supply_order  $supply_order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        supply_order::where('id',$id)->delete();
       
        return redirect()->route('supplyOrderDetail.index')->with('addsupplier','supply order canceled');
    }
}
