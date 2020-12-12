<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('brands.index', compact('brands'));
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
            'name' => 'required|min:2|unique:brands'
        ]);
        Brand::create($request->all());
        return redirect()->route('brand.index')->with('success', 'Brand is saved');
    }

    /**
     * Display the specified resource.
     *
     * @param Brand $brand
     * @return Application|Factory|View|Response
     */
    public function show(Brand $brand)
    {
        return view('brands.index', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Brand $brand
     * @return Application|Factory|View|Response
     */
    public function edit(Brand $brand)
    {
        return view('brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Brand $brand
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validate($request,[
            'name' => 'required|min:2|unique:brands'
        ]);
        $brand->update($request->all());
        return redirect()->route('brand.index')->with('success', 'Brand has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Brand $brand
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brand.index')->with('success', 'Brand has been deleted');
    }
}
