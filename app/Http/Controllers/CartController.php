<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menus;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('foods', []);
        return view('foods.editOrder');
    }

    public function addToCart(Request $request, $menu_item_id)
    {
        $menu = Menus::findOrFail($menu_item_id);
        $cart = session()->get('cart', []);

        if (isset($cart[$menu_item_id])) {
            // Increase quantity if item already exists
            $cart[$menu_item_id]['quantity'] += 1;
        } else {
            // Add new item to cart
            $cart[$menu_item_id] = [
                "name" => $menu->name,
                "price" => $menu->price,
                "image" => $menu->menu_image, 
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart); // Use correct session key

        return redirect()->back()->with('success', 'Item added to cart!');
    }

    public function updateCart(Request $request, $id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Item removed from cart');
    }
}
