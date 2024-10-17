<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;


class ShopController extends Controller
{
    public function store()
    {
        $items = [
            ['id' => 1, 'name' => 'Keyboard Pad', 'image' => 'keyboard_pad_logo.jpg', 'price' => 21], 
            ['id' => 2, 'name' => 'Mug', 'image' => 'mug.jpg', 'price' => 11],
            ['id' => 3, 'name' => 'Plain Pad', 'image' => 'keyboard_pad_plain.jpg', 'price' => 20], 
        ];

        return view('store', compact('items'));
    }

    public function addToCart(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
        ]);
    
        
        Cart::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ]);
    
        return redirect()->route('cart')->with('success', 'Item added to cart!');
    }

    public function cart()
    {
        $cart = Session::get('cart', []);

        return view('cart', compact('cart'));
    }


    
}
