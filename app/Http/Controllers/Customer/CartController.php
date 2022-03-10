<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request,$id)
    {
        /*print_r($request->session()->all());
        die();*/
        /*$value = $request->session()->get('');
        print_r($value);*/
        /*$request->session()->flush();
        return true;*/
        $cart = $request->session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        'quantity' => 1
                    ]
            ];
           
            $request->session()->put('cart',$cart);
            //session([$id=>$cartData]);
            $value = $request->session()->all();
            echo "<pre>";
            echo "No Id";
            print_r($value);
            return true;
        }

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $request->session()->put('cart', $cart);
            $value = $request->session()->all();
            echo "<pre>";
            echo "if cart not empty";
            print_r($value);
            return true;
           /* return redirect()->back()->with('success', 'Product added to cart successfully!');*/
        }


        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "quantity" => 1,
        ];
        $request->session()->put('cart', $cart);
        $value = $request->session()->all();
            echo "<pre>";
            echo "f item not exist in cart ";
            print_r($value);
            return true;
            //return redirect()->back()->with('success', 'Product added to cart successfully!');
        
        
        //die();
    }
}
