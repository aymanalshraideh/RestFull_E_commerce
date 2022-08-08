<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Requests\StorecategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{

    public function showAllCategoreis()
    {
      $categories=category::all();
      return response()->json(['Categories' => $categories,'state'=> 200]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'categorie_name_en' => 'required',
            'categorie_name_ar' => 'required',
            'categorie_description_en' => 'required',
            'categorie_description_ar' => 'required',
            'categorie_image' => 'required',


        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 401);
        }
        $register=new category();
        $register->categorie_name_en=$request->categorie_name_en;
        $register->categorie_name_ar=$request->categorie_name_ar;
        $register->categorie_description_en=$request->categorie_description_en;
        $register->categorie_description_ar=$request->categorie_description_ar;
        if ($request->hasFile('categorie_image')) {
            $file=$request->categorie_image;
            $new_file=time().$file->getClientOriginalName();
            $file->move('category_images',$new_file);
            $register->categorie_image='category_images/'.$new_file;
             }else{
                $register->categorie_image-> $request->categorie_image;
             }
        $register->save();
        return response()->json([
            'message' => "success register $register->categorie_name_en Category",
            'state'=> 200
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function showSingleCategory($id)
    {
        $category=category::find($id);






        if($category){
            return response()->json([
            'category' =>$category,
            'statu'=>200
        ]);
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
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=category::find($id);
        if($category){
            return response()->json([
            'category' =>$category,
            'statu'=>200
        ]);
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
     * @param  \App\Http\Requests\UpdatecategoryRequest  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function  update(Request $request, $id)
    {
        $update= category::find($id);
        $update->categorie_name_en=$request->categorie_name_en;
        $update->categorie_name_ar=$request->categorie_name_ar;
        $update->categorie_description_en=$request->categorie_description_en;
        $update->categorie_description_ar=$request->categorie_description_ar;
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
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=category::find($id);




        if($category){
            $category->delete();
            return response()->json([
                'message' => "success Delete category ",
                 'state'=>200
                ]);
            }else{
                return response()->json([
                    'message' => "category is not Found ",
                     'state'=>500
                    ]);
            }
    }
}
