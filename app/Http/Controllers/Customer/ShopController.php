<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        
        $data['sociallink'] = DB::table('social_tb')
        ->select('*')
        ->first();

$data['appsetting'] = DB::table('appsetting_tb')
->select('*')
->first();

        return view('ecommerce/shopgrid',$data);
    }  
    public function shopingCart(){

        // $data['banner'] = DB::table('banner_tb')
        //         ->select('*')
        //         ->first();

                
        $data['sociallink'] = DB::table('social_tb')
        ->select('*')
        ->first();

$data['appsetting'] = DB::table('appsetting_tb')
->select('*')
->first();

        return view('ecommerce/shopingcart',$data);
    }
    
}
