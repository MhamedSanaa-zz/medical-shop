<?php

namespace App\Http\Controllers;
use App\type;
use App\medecine;
use App\invoice_detail;
use Illuminate\Http\Request;

class MedecineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medecines=medecine::all();
       $types=type::all();
        return view('medecine.index',compact('medecines','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $types=type::all();
        return view('medecine.create',compact('types'));
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
        $medecine=new medecine();
        $medecine->name=$request->name;
        $medecine->generic=$request->generic;
        $medecine->type_id=$request->type;
        $medecine->status=1;
        $medecine->price=$request->price;
        $medecine->description=$request->description;
       
        $medecine->save();

      return redirect()->route('medecine.index')->with('addmedecine','medecine added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medecine  $medecine
     * @return \Illuminate\Http\Response
     */
    public function show(medecine $medecine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medecine  $medecine
     * @return \Illuminate\Http\Response
     */
    public function edit(medecine $medecine)
    {   $types=type::all();
        return view('medecine.edit', compact('medecine','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medecine  $medecine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medecine $medecine)
    {
        $validatedData=$request->validate($this->validationRules());
        $medecine->update($validatedData);

        return redirect()->route('medecine.index')
                        ->with('addmedecine','medecine informations updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medecine  $medecine
     * @return \Illuminate\Http\Response
     */
    public function destroy(medecine $medecine)
    {
        
        $medecine->delete();

        return redirect()->route('medecine.index')->with('addmedecine', 'Booking deleted successfully');
     
    }
    private function validationRules()
    {
        return [
            'name' => 'required',
            'generic' => 'required',
            'price' => 'required',
            'description' => 'required'

        ];
    }
}
