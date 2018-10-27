<?php

namespace App\Http\Controllers;

use App\Editable;
use Illuminate\Http\Request;

class EditableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function master()
    {
        $editables=Editable::all();

        return view('master.master', compact('editables')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Editable  $editable
     * @return \Illuminate\Http\Response
     */
    public function show(Editable $editable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Editable  $editable
     * @return \Illuminate\Http\Response
     */
    public function edit(Editable $editable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Editable  $editable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editable $editable)
    {
        
        $editable=Editable::find(1);
        $editable->titulo=$request->titulo;
        $editable->footer=$request->footer;
        $editable->save();
            
        
        return response()->json($editable);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Editable  $editable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editable $editable)
    {
        //
    }
}
