<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CatController extends Controller
{
    //FOr Add Categoy
    public function index(){
        return view('backend.category.categories');
    }
    public function addcat(){
        return view('backend.category.addcat');
    }
    public function addcatmodal(Request $request){
        $cat = new Category();
        $cat->catname = $request->name;
        $cat->catdes = $request->des;
        $cat->catstatus = $request->status;
        $cat->save();    
        return response()->json([
            'message'=>"Data Insert Successfully",
        ]);
    }
    public function showdata(){
        $cat = Category::all();
        return response()->json([
            "status"=>200,
            "AllData"=> $cat,
        ]);
    }
    public function deletecat($id){
        $cat = Category::find($id);
        $cat->delete();
        return response()->json([
            "message"=>"Data Delete Succesfully!",
        ]);
    }
    public function editcat($id){
        $cat = Category::find($id);
        return response()->json([
            "AllData"=> $cat,
        ]);
    }
    public function updatecat(Request $request,$id){
        $cat = Category::find($id);
        $cat->catname = $request->name;
        $cat->catdes = $request->des;
        $cat->catstatus = $request->status;
        $cat->update();
        return response()->json([
            "message"=>"Data Update Succesfully!",
        ]);
    }

}
