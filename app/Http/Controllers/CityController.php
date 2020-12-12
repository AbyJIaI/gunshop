<?php

namespace App\Http\Controllers;

use App\Models\City;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $cities = City::all();
        return view('cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $cities = City::all();
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
        City::create($request->all());
        return redirect()->route('cities.index')->with('success', 'City is added');
    }

    /**
     * Display the specified resource.
     *
     * @param City $city
     * @return Application|Factory|View|Response
     */
    public function show(City $city)
    {
        return view('cities.index', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param City $city
     * @return Application|Factory|View|Response
     */
    public function edit(City $city)
    {
        return view('cities.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param City $city
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, City $city)
    {
        $this->validate($request,[
            'name' => 'required|min:2|unique:cities'
        ]);
        $city->update($request->all());
        return redirect()->route('cities.index')->with('success', 'City has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param City $city
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index')->with('success', 'City has been deleted');
    }
}
