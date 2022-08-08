<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showAllsubCategoreis()
    {
      $categories=Subcategory::all();
      return response()->json(['SubCategories' => $categories,'state'=> 200]);

    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubcategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'subcategorie_name_en' => 'required',
        'subcategorie_name_ar' => 'required',
        'subcategorie_description_en' => 'required',
        'subcategorie_description_ar' => 'required',
        'categorie_image' => 'required',
        'categorie_id' => 'required',

    ]);
    if ($validator->fails()) {
        return response()->json($validator->errors(), 401);
    }
        $register=new Subcategory();
        $register->subcategorie_name_en=$request->subcategorie_name_en;
        $register->subcategorie_name_ar=$request->subcategorie_name_ar;
        $register->subcategorie_description_en=$request->subcategorie_description_en;
        $register->subcategorie_description_ar=$request->subcategorie_description_ar;
        if ($request->hasFile('categorie_image')) {
            $file=$request->categorie_image;
            $new_file=time().$file->getClientOriginalName();
            $file->move('Subcategory_images',$new_file);
            $register->categorie_image='Subcategory_images/'.$new_file;
             }else{
                $register->categorie_image= 'falid input';
             }
        $register->categorie_id=$request->categorie_id;

        $register->save();
        return response()->json(['message' => "success register $register->subcategorie_name_en SubCategory",'state'=> 200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function showSinglesubCategory($id)
    {

        $Subcategory=Subcategory::find($id);

        if($Subcategory){

            return response()->json(['Subcategory' =>$Subcategory,'statu'=>200]);
            }else{
                return response()->json([
                    'message' => "category is not Found ",
                     'state'=>500
                    ]);
            }

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Subcategory=Subcategory::find($id);

        if($Subcategory){

            return response()->json(['Subcategory' =>$Subcategory,'statu'=>200]);
            }else{
                return response()->json([
                    'message' => "category is not Found ",
                     'state'=>500
                    ]);
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubcategoryRequest  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function  update(Request $request, $id)
    {
        $update= Subcategory::find($id);
        $update->subcategorie_name_en=$request->subcategorie_name_en;
        $update->subcategorie_name_ar=$request->subcategorie_name_ar;
        $update->subcategorie_description_en=$request->subcategorie_description_en;
        $update->subcategorie_description_ar=$request->subcategorie_description_ar;
        if ($request->hasFile('categorie_image')) {
            $file=$request->categorie_image;
            $new_file=time().$file->getClientOriginalName();
            $file->move('category_images',$new_file);
            $update->categorie_image='category_images/'.$new_file;
             }else{
                $update->categorie_image-> $request->categorie_image;
             }
        $update->update();
        return response()->json(['message' => "success register $update->categorie_name_en Category",'state'=> 200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Subcategory=Subcategory::find($id);

        if($Subcategory){
            $Subcategory->delete();
            return response()->json(['message' => "success Delete Subcategory ", 'state'=>200]);
            }else{
                return response()->json([
                    'message' => "category is not Found ",
                     'state'=>500
                    ]);
            }

    }
}
