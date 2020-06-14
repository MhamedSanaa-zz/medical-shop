<?php

namespace App\Http\Controllers;

use App\medecine;
use App\invoice;
use App\customer;
use App\invoice_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medecines=medecine::where('status','=',1)->get();
        return view('invoiceDetail.create',compact('medecines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for ( $i=0 ; $i<count($request->medecine_id);$i++)
        {
            DB::table('invoice_details')->insert(
                ['invoice_id' => $request->invoice_id, 'medecine_id' => $request->medecine_id[$i],'qty' => $request->qty[$i]]
            );
        }
        return redirect()->route('invoice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function show(invoice_detail $invoice_detail)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(invoice_detail $invoice_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoice_detail $invoice_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoice_detail $invoice_detail)
    {
        //
    }
}
