<?php

namespace App\Http\Controllers;

use App\Models\Genders;
use Illuminate\Http\Request;

class GendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genders = Genders::all();
        return view('genders.index', compact('genders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = Genders::all();
        return view('genders.index', compact('genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gender = new Genders();
        $gender->name = $request->input('name');
        $gender->save();
        return redirect()->route('genders.index')->with('success', 'Gender is saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genders  $genders
     * @return \Illuminate\Http\Response
     */
    public function show(Genders $genders)
    {
        return view('genders.index', compact('genders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genders  $genders
     * @return \Illuminate\Http\Response
     */
    public function edit(Genders $genders)
    {
        return view('genders.edit', compact('genders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genders  $genders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genders $genders)
    {
        $genders->update($request->only('name'));
        return redirect()->route('genders.index')->with('success', 'Gender has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genders  $genders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genders $genders)
    {
        $genders->delete();
        return redirect()->route('genders.index')->with('success', 'Gender has been deleted');
    }
}
