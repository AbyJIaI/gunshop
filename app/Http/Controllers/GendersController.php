<?php

namespace App\Http\Controllers;

use App\Models\Genders;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class GendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $genders = Genders::all();
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
        Genders::create($request->all());
        return redirect()->route('genders.index')->with('success', 'Gender is saved');
    }

    /**
     * Display the specified resource.
     *
     * @param Genders $genders
     * @return Application|Factory|View|Response
     */
    public function show(Genders $genders)
    {
        return view('genders.index', compact('genders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Genders $genders
     * @return Application|Factory|View|Response
     */
    public function edit(Genders $genders)
    {
        return view('genders.edit', compact('genders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Genders $genders
     * @return RedirectResponse
     */
    public function update(Request $request, Genders $genders)
    {
        $this->validate($request,[
            'name' => 'required|min:2|unique:genders'
        ]);
        $genders->update($request->only('name'));
        return redirect()->route('genders.index')->with('success', 'Gender has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Genders $genders
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Genders $genders)
    {
        $genders->delete();
        return redirect()->route('genders.index')->with('success', 'Gender has been deleted');
    }
}
