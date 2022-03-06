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

        $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('copyright_text')
                            ->first();
                                  
        return view ('Admin/addcatagory',$data);
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

    
    public function parentCategory(){

        $data['parentcategory'] = DB::table('category_tb')
                                ->select('category_tb.*')
                                ->where('category','=',0)                          
                                ->get();
            $data['appsetting'] = DB::table('appsetting_tb')
                                ->select('copyright_text')
                                ->first();

        return view('Admin/parentcategory',$data);
    }
    public function childCategory(){
        $data['childcategory'] = DB::table('category_tb')
                                ->select('category_tb.*')
                                ->where('category','!=',0)                          
                                ->get();
            $data['appsetting']= DB::table('appsetting_tb')
                                ->select('copyright_text')
                                ->first();
        return view('Admin/childcategory', $data);
    }
    
    public function editParent($id=null){
        $data['editparent'] = DB::table('category_tb')
                            ->select('category_tb.*')
                            ->where('category','=',0)                          
                            ->first();
        $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('copyright_text')
                            ->first();
        return view('Admin/editparentcatagory',$data);
    }
    public function updateParent($id=null, Request $request){
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

        $update = DB::table('category_tb') ->where('id',$id)->update($data);

        if($update){
            return redirect('editparent/'.$id)->with('status','Successfully added');
        }else{
            return redirect('editparent/'.$id)->with('status','Something wrong');
        }
    }
    public function editChild($id=null){
        $data['childcategory'] = DB::table('category_tb')
                                ->select('category_tb.*')
                                ->where('category','!=',0)                          
                                ->first();
           $data['appsetting'] = DB::table('appsetting_tb')
                                ->select('copyright_text')
                                ->first();                  
        
        return view('Admin/editchildcatagory',$data);
    }
    public function updateChild($id=null, Request $request){
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

        $update = DB::table('category_tb') ->where('id',$id)->update($data);

        if($update){
            return redirect('editchild/'.$id)->with('status','Successfully added');
        }else{
            return redirect('editchild/'.$id)->with('status','Something wrong');
        }
    }

}
