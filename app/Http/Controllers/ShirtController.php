<?php

namespace App\Http\Controllers;

use App\Models\Shirt;
use Illuminate\Http\Request;

class ShirtController extends Controller
{
    public function index() 
    {
        $shirts = Shirt::all();
        return view('shoppingcart.products', compact('shirts'));
    }
    public function shirtCart(){
        return view("shoppingcart.cart");
    }
    public function addShirttoCart($id)
    {
        $shirt = Shirt::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }
        else{
            $cart[$id] = [
                'name' => $shirt->name,
                'quantity' => 1,
                'price' => $shirt->price,
                'image' => $shirt->image,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Shirt has been added to your cart');
    }
    public function updateCart(Request $request){
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Shirt added to cart');
        }
    }
    public function deleteProduct(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Shirt successfully deleted');
        }
    }
}
