<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $cities = Cities::all();
        return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $cities = Cities::all();
        return view('cities.index', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:2|unique:cities'
        ]);
        Cities::create($request->all());
        return redirect()->route('cities.index')->with('success', 'City is added');
    }

    /**
     * Display the specified resource.
     *
     * @param Cities $cities
     * @return Application|Factory|View|Response
     */
    public function show(Cities $cities)
    {
        return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Cities $cities
     * @return Application|Factory|View|Response
     */
    public function edit(Cities $cities)
    {
        return view('cities.edit', compact('cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Cities $cities
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Cities $cities)
    {
        $this->validate($request,[
            'name' => 'required|min:2|unique:cities'
        ]);
        $cities->update($request->all());
        return redirect()->route('cities.index')->with('success', 'City has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cities $cities
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Cities $cities)
    {
        $cities->delete();
        return redirect()->route('cities.index')->with('success', 'City has been deleted');
    }
}
