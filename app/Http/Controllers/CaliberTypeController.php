<?php

namespace App\Http\Controllers;

use App\Models\CaliberType;
use App\Models\Category;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use phpDocumentor\Reflection\Types\AbstractList;

class CaliberTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $types = CaliberType::all();
        return view('caliber_types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('caliber_types.index', compact('types'));
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
            'name' => 'required|min:2|unique:categories'
        ]);
        CaliberType::create($request->all());
        return redirect()->route('calibertype.index')->with('success', 'Caliber type is saved');
    }

    /**
     * Display the specified resource.
     *
     * @param CaliberType $caliberType
     * @return Application|Factory|View|Response
     */
    public function show(CaliberType $caliberType)
    {
        return view('caliber_types.index', compact('caliberType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CaliberType $caliberType
     * @return Application|Factory|View|Response
     */
    public function edit(CaliberType $caliberType)
    {
        return view('caliber_types.edit', compact('caliberType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param CaliberType $caliberType
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, CaliberType $caliberType)
    {
        $this->validate($request,[
            'name' => 'required|min:2|unique:categories'
        ]);
        $caliberType->update($request->all());
        return redirect()->route('calibertype.index')->with('success', 'Caliber type has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CaliberType $caliberType
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(CaliberType $caliberType)
    {
        $caliberType->delete();
        return redirect()->route('calibertype.index')->with('success', 'Caliber type has been deleted');
    }
}
