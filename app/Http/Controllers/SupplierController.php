<?php

namespace App\Http\Controllers;

use App\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers=supplier::all();
        return view('supplier.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
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
        $supplier=new supplier();
        $supplier->name=$request->name;
        $supplier->phone=$request->phone;
        $supplier->address=$request->address;
        $supplier->email=$request->email;

        $supplier->save();
        return redirect()->route('supplier.index')->with('addsupplier','supplier added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(supplier $supplier)
    {
        return view('supplier.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, supplier $supplier)
    {
        $validatedData=$request->validate($this->validationRules());
        $supplier->update($validatedData);

        return redirect()->route('supplier.index')
                        ->with('addsupplier','stock informations updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('supplier.index')->with('addsupplier','supplier deleted successfully');
    }

    private function validationRules()
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required'
        ];
    }
}
