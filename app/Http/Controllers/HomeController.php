<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\PaymentType;
use App\Models\Product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('home', compact('products', 'categories'));
    }

    public function contact() {
        return view('contact');
    }

    public function payment(Request $request) {
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'address' => 'required'
        ]);
        //Order::create($request->all());
        $types = PaymentType::all();
        return view('payment', compact('types'))->with('success', 'Order is added');
    }
}
