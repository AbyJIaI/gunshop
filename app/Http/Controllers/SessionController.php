<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function set(Request $request)
    {
        $cart = session()->get('cart');
        if ($cart[$request->input('id')]['quantity'] < $request->input('quantity')){
            $check = session()->get('check');
            $check += $cart[$request->input('id')]['price'];
            session()->put('check', $check);
            $cart[$request->input('id')]['total'] += $cart[$request->input('id')]['price'];
        }
        else if ($cart[$request->input('id')]['quantity'] > $request->input('quantity')) {
            $check = session()->get('check');
            $check -= $cart[$request->input('id')]['price'];
            session()->put('check', $check);
            $cart[$request->input('id')]['total'] -= $cart[$request->input('id')]['price'];
        }
        $cart[$request->input('id')]['quantity'] = $request->input('quantity');
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'successfully!');
    }

    public function delete(Request $request)
    {
        $cart = session()->get('cart');
        unset($cart[$request->input('id')]);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'successfully!');
    }
}
