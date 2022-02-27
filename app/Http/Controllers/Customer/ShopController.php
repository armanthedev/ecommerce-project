<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        return view('ecommerce/shopgrid');
    }  
    public function shopingCart(){
        return view('ecommerce/shopingcart');
    }
    
}
