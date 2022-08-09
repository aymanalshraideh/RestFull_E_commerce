<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return response()->json([
            'products' => $product,
            'state'=> 200
        ]);
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


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name_en' => 'required',
            'product_name_ar' => 'required',
            'subcategorie_id' => 'required',
            'categorie_id' => 'required',
            'product_quantity' => 'required',
            'product_price' => 'required',
            'product_rate' => 'required',
            'product_main_image' => 'required',
            'product_description_ar' => 'required',
            'product_description_en' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 401);
        }
           $product=new Product();
           $product->product_name_en=$request->product_name_en;
           $product->product_name_ar=$request->product_name_ar;
           $product->subcategorie_id=$request->subcategorie_id;
           $product->categorie_id=$request->categorie_id;
           $product->product_quantity=$request->product_quantity;
           $product->product_price=$request->product_price;
           if ($request->hasFile('product_main_image')) {
            $file=$request->product_main_image;
            $new_file=time().$file->getClientOriginalName();
            $file->move('product_images',$new_file);
            $product->product_main_image='product_images/'.$new_file;
             }else{
                $product->product_main_image= 'falid input';
             }
          if ($request->hasFile('product_image1')) {
             $file=$request->product_image1;
             $new_file=time().$file->getClientOriginalName();
             $file->move('product_images',$new_file);
             $product->product_image1='product_images/'.$new_file;
              }else{
                 $product->product_image1= 'falid input image1';
              }
          if ($request->hasFile('product_image2')) {
            $file=$request->product_image2;
            $new_file=time().$file->getClientOriginalName();
            $file->move('product_images',$new_file);
            $product->product_image2='product_images/'.$new_file;
             }else{
                $product->product_image2= 'falid input image2';
             }
          if ($request->hasFile('product_image3')) {
             $file=$request->product_image3;
             $new_file=time().$file->getClientOriginalName();
             $file->move('product_images',$new_file);
             $product->product_image3='product_images/'.$new_file;
              }else{
                 $product->product_image3= 'falid input image3';
              }


            $product->product_description_en=$request->product_description_en;
            $product->product_description_ar=$request->product_description_ar;

            $product->save();
            return response()->json(['message' => "success Add $product->product_name_en ",'state'=> 200]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $product=Product::find($id);
        if($product){

            return response()->json([
                'product' =>$product,
                'statu'=>200
            ]);
        }else{
            return response()->json([
                'message' => "Product is not Found ",
                 'state'=>500
                ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return response()->json(['product' =>$product,'statu'=>200]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $product=Product::find($id);
        if($product){
            $validator = Validator::make($request->all(), [
                'product_name_en' => 'required',
                'product_name_ar' => 'required',
                'subcategorie_id' => 'required',
                'categorie_id' => 'required',
                'product_quantity' => 'required',
                'product_price' => 'required',
                'product_rate' => 'required',
                'product_main_image' => 'required',
                'product_description_ar' => 'required',
                'product_description_en' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 401);
            }

               $product->product_name_en=$request->product_name_en;
               $product->product_name_ar=$request->product_name_ar;
               $product->subcategorie_id=$request->subcategorie_id;
               $product->categorie_id=$request->categorie_id;
               $product->product_quantity=$request->product_quantity;
               $product->product_price=$request->product_price;
               if ($request->hasFile('product_main_image')) {
                $file=$request->product_main_image;
                $new_file=time().$file->getClientOriginalName();
                $file->move('product_images',$new_file);
                $product->product_main_image='product_images/'.$new_file;
                 }else{
                    $product->product_main_image= 'falid input';
                 }
              if ($request->hasFile('product_image1')) {
                 $file=$request->product_image1;
                 $new_file=time().$file->getClientOriginalName();
                 $file->move('product_images',$new_file);
                 $product->product_image1='product_images/'.$new_file;
                  }else{
                     $product->product_image1= 'falid input image1';
                  }
              if ($request->hasFile('product_image2')) {
                $file=$request->product_image2;
                $new_file=time().$file->getClientOriginalName();
                $file->move('product_images',$new_file);
                $product->product_image2='product_images/'.$new_file;
                 }else{
                    $product->product_image2= 'falid input image2';
                 }
              if ($request->hasFile('product_image3')) {
                 $file=$request->product_image3;
                 $new_file=time().$file->getClientOriginalName();
                 $file->move('product_images',$new_file);
                 $product->product_image3='product_images/'.$new_file;
                  }else{
                     $product->product_image3= 'falid input image3';
                  }


                $product->product_description_en=$request->product_description_en;
                $product->product_description_ar=$request->product_description_ar;

                $product->update();
                return response()->json(['message' => "success Update $product->product_name_en ",'state'=> 200]);
            }else{
                return response()->json([
                    'message' => "Product is not Found ",
                     'state'=>500
                    ]);
            }


    }


    public function destroy($id)
    {
        $product=Product::find($id);
        if($product){
        $product->delete();
        return response()->json([
            'message' => "success Delete Product ",
             'state'=>200
            ]);
        }else{
            return response()->json([
                'message' => "Product is not Found ",
                 'state'=>500
                ]);
        }

    }

    public function searchProduct($key){


        $products = Product::query()
        ->where('product_name_en', 'LIKE', "%{$key}%")
        ->orWhere('product_name_ar', 'LIKE', "%{$key}%")
        ->get();
return $products;
return response()->json(['Products'=>$products,'Status'=>'success']);
    }
}
