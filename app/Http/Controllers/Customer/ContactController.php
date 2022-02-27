<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contact(){
        $data['contact'] = DB::table('contact_tb')
        ->select('*')
        ->first();

        return view('ecommerce/contact', $data);
    }
}