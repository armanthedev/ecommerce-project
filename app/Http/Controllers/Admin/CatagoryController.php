<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatagoryController extends Controller
{
    public function addcatagory(){
        $data['category'] = DB::table('category_tb')
        ->select('category_tb.*')
        ->where('category','=',0)                          
        ->get();
                                  
        return view ('Admin/addcatagory',$data);
    }


    public function parentCategory(){

        $data['parentcategory'] = DB::table('category_tb')
        ->select('category_tb.*')
        ->where('category','=',0)                          
        ->get();

        return view('Admin/parentcategory',$data);
    }
    public function childCategory(){
        $data['childcategory'] = DB::table('category_tb')
        ->select('category_tb.*')
        ->where('category','!=',0)                          
        ->get();
        return view('Admin/childcategory', $data);
    }
  
    public function postCatagory(Request $request){
        $validated = $request->validate([
            'c_name' => 'required|max:255',
            'category' => 'required|numeric',
            'status' => 'required|numeric',
            // 'c_description' => 'required|max:500',
        ]);

        $data = array(
            'c_name' => $request ->input('c_name'),
            'category' => $request ->input('category'),
            'status' => $request ->input('status'),
            // 'c_description' => $request ->input('c_description'),
        );

        $insert = DB::table('category_tb') ->insert($data);

        if($insert){
            return redirect('addcatagory')->with('status','Successfully added');
        }else{
            return redirect('addcatagory')->with('status','Something wrong');
        }



    }
    
    public function editParent(){
        return view('Admin/editparentcatagory');
    }
    public function editChild(){
        return view('Admin/editchildcatagory');
    }

}
