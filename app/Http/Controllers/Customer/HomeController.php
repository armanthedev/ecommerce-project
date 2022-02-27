<?php

namespace App\Http\Controllers\Customer;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

                $data['banner'] = DB::table('banner_tb')
                ->select('*')
                ->first();

        return view('ecommerce/home', $data);
    }

    public function privacyPolicy(){
        $data['privacy'] = DB::table('privacy_tb')
                            ->select('*')
                            ->first();

        return view('ecommerce/privacypolicy',$data);
    }
    public function deliveryInformation(){

        return view('ecommerce/delivery');
    }
    public function addDelivery(Request $request){
        $validated = $request->validate([
            'user'              => 'required|max:255',
            'payment'           => 'required|max:150',
            'comment'           => 'required|max:500',
            'date'              => 'required',
            'amount'            => 'required|numeric',
            'fees'              => 'required|numeric'
        ]);
        
     
        
        $data = array(
            'u_name'            => $request->input('user'),
            'pay_method' =>  $request->input('payment'),
            'Comments'  => $request->input('comment'),
            'Date'        => $request->input('date'),
            'Amount'        => $request->input('amount'),
            'Fees'           => $request->input('fees')
        );
       $insert = DB::table('deliveryinfo_tb')->insert($data);
       if($insert){
            return redirect('deliverinfo')->with('status', 'Successfully Added');
       }else{
            return redirect('deliverinfo')->with('error', 'Something Went Wrong');
       }
        // $input = $request -> all();
        // echo '<pre>'; 
        // print_r($input);
        // die();
       
        // print_r(request->all());
        // die();
    }
}
