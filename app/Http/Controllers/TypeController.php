<?php

namespace App\Http\Controllers;

use App\type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=type::all();
        return view('type.index' ,compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new type;
        $type->type = $request->type;
        $type->save();
        return redirect()->route('type.index')->with('ADDtype','type addition successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(type $type)
    {
        return view('type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, type $type)
    {
        $type->update($request->all());
        return redirect()->route('type.index')->with('EDITtype','type editing successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(type $type)
    {
        $type->delete();

        return redirect()->route('type.index')->with('DELtype','type deleted successfully');
    }
}
