<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $genders = Gender::all();
        return view('genders.index', compact('genders'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('genders.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:2|unique:genders'
        ]);
        Gender::create($request->all());
        return redirect()->route('genders.index')->with('success', 'Gender is saved');
    }

    /**
     * Display the specified resource.
     *
     * @param Gender $gender
     * @return Application|Factory|View|Response
     */
    public function show(Gender $gender)
    {
        return view('genders.index', compact('gender'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Gender $gender
     * @return Application|Factory|View|Response
     */
    public function edit(Gender $gender)
    {
        return view('genders.edit', compact('gender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Gender $gender
     * @return RedirectResponse
     */
    public function update(Request $request, Gender $gender)
    {
        $this->validate($request,[
            'name' => 'required|min:2|unique:genders'
        ]);
        $gender->update($request->only('name'));
        return redirect()->route('genders.index')->with('success', 'Gender has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Gender $gender
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Gender $gender)
    {
        $gender->delete();
        return redirect()->route('genders.index')->with('success', 'Gender has been deleted');
    }
}
