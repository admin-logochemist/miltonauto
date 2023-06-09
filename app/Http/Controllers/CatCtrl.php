<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryReq;
use Validator;
use App\Models\Categorie;

class CatCtrl extends Controller
{
    public function CategoryView(){

        $data = Categorie::paginate(50);
        return view('admin.Category', compact('data'));
        // return view('admin.Category', ['data' => $data]);
    }

    public function AddCategory(Request $req){
        $validate = Validator::make($req->all(),[
            'name' => 'required',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);
        if($validate->passes()){
            $data = Categorie::create($req->all());
            $response = $data ? response()->json(['response' => 'added'],201) : response()->json(['response' => 'category could not be saved'],401);
            return $response;
            
        }
        return response()->json(['validation_error' => $validate->errors()]);
        
    }

    public function CatRec($id){
        $CatRec = Categorie::find($id);
        return $CatRec;
    }

    public function UpdateCat(Request $req){
        $validate = Validator::make($req->all(),[
            'name' => 'required',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required'
        ]);
        if($validate->passes()){
            $UpdateCatRec = Categorie::find($req->id);

            $UpdateCatRec->name = $req->name;
            $UpdateCatRec->description = $req->description;
            $UpdateCatRec->meta_title = $req->meta_title;
            $UpdateCatRec->meta_description = $req->meta_description;

            $data = $UpdateCatRec->save();
            $response = $data ? response()->json(['response' => 'category updated'],201) : response()->json(['error' => 'category could not be updated'],401);
            return $response;
        }
        return response()->json(['validation_error' => $validate->errors()]);

    }

    public function delCat($id){
        $delCatQ = Categorie::find($id);
        $delCat = $delCatQ->delete();

        $response = $delCat ? redirect('admin/category')->with(['success' => 'Record Deleted']) : redirect('admin/category')->with(['error' => 'Record could not be deleted']);
        return $response;
    }


}
