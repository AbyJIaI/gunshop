<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\CaliberType;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Intervention\Image\Facades\Image;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $types = CaliberType::all();
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::all();
        return view('products.index', compact('types', 'brands', 'categories', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|integer|min:1|max:1000000000',
            'amount' => 'required|integer|min:1|max:10000',
            'category_id' => 'required|not_in:0',
            'brand_id' => 'required|not_in:0',
            'caliber_id' => 'required|not_in:0',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $params = $request->all();
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = '/app/public/' . $filename;
            Image::make($image->getRealPath())->resize(300, 300)->save(storage_path($path));
            $params['image'] = $filename;

        }

        Product::create($params);
        return redirect()->route('products.index')->with('success', 'Product is added');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View|Response
     */
    public function show(Product $product)
    {
        return view('single', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View|Response
     */
    public function edit(Product $product)
    {

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->only('name', 'price', 'amount', 'brand_id', 'category_id', 'caliber_id'));
        return redirect()->route('products.index')->with('success', 'Caliber has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product has been deleted');
    }
}
