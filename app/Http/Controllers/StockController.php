<?php

namespace App\Http\Controllers;
use App\medecine;
use App\stock;
use Illuminate\Http\Request;
use DB;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data=DB::table('stocks')->join('medecines','medecines.id','=','stocks.medecine_id')->select('stocks.id','stocks.qty','stocks.expiration_date','stocks.batch_nbr','medecines.name')
        ->get();
        
    return view('stock.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medecines=medecine::all();
        return view('stock.create',compact('medecines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $request->validate($this->validationRules());
            $stock=new stock();
            $stock->qty=$request->qty;
            $stock->batch_nbr= $request->batch_nbr;
            $stock->expiration_date=$request->expiration_date;
            $stock->medecine_id=$request->medecine_id;
            $stock->save();
            
            DB::table('medecines')->where('id',$request->medecine_id)->update(
                [
                    'status' => 1
                ]
                );
    
        
          
        return redirect()->route('stock.index')->with('addstock','stock added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(stock $stock)
    {
        $medecines=medecine::where('id',$stock->medecine_id)->get();
        return view('stock.show',compact('stock','medecines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(stock $stock)
    {
       
        $medecines=medecine::all();
        return view('stock.edit',compact('stock','medecines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stock $stock)
    {
        $validatedData=$request->validate($this->validationRules());
        $stock->update($validatedData);

        return redirect()->route('stock.show',compact('stock'))
                        ->with('addstock','stock informations updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(stock $stock)
    {
        $stock->delete();
            
        return redirect()->route('stock.index')->with('addstock','stock deleted successfully');
    }
    private function validationRules()
    {
        return [
            'medecine_id' => 'required',
            'qty' => 'required',
            'batch_nbr' => 'required',
            'expiration_date' => 'required|date'
        ];
    }
}
