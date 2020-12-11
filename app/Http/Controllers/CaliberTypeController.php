<?php

namespace App\Http\Controllers;

use App\Models\CaliberType;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\AbstractList;

class CaliberTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = CaliberType::all();
        return view('caliber_types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = CaliberType::all();
        return view('caliber_types.index', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new CaliberType();
        $type->name = $request->input('name');
        $type->save();
        return redirect()->route('calibertype.index')->with('success', 'Caliber type is saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CaliberType  $caliberType
     * @return \Illuminate\Http\Response
     */
    public function show(CaliberType $caliberType)
    {
        return view('caliber_types.index', compact('caliberType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CaliberType  $caliberType
     * @return \Illuminate\Http\Response
     */
    public function edit(CaliberType $caliberType)
    {
        return view('caliber_types.edit', compact('caliberType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CaliberType  $caliberType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaliberType $caliberType)
    {
        $caliberType->update($request->only('name'));
        return redirect()->route('calibertype.index')->with('success', 'Caliber type has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaliberType  $caliberType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaliberType $caliberType)
    {
        $caliberType->delete();
        return redirect()->route('calibertype.index')->with('success', 'Caliber type has been deleted');
    }
}
