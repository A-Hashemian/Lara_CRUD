<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Product;
use Image;

class ProductController extends Controller
{
    public function get_all_product(){

         $products=Product::all();
         return response()-> json([
         'products'=> $products
         ],200)
    }

     public function add_product(Request $request){

             $products=new Product();
             $products->name=$request->name;
             $products->description=$request->description;

             if($request->photo!=""){
               $strpos=strpos($request->photo,';');
               $sub=substr($request->photo,0,$strpos);
               $ex=explode('/',$sub)[1];
               $name=time().".".$ex;
               $img=Image::make($request->photo)->resize(200,200);
               $upload_path=public_path()."/upload/";
               $img->save($upload_path.$name);
               $product->photo=$name;
             }else{
               $product->photo="image.png";
             }

              $products->photo=$name;
              $product->type=$request->type;
              $product->quantity=$request->quantity;
              $product->price=$request->price;

              $product->save();
        }

          public function get_edit_product($id){

                 $products=Product::find($id);
                 return response()-> json([
                 'products'=> $products
                 ],200)
            }

         public function update_product(Request $request,$id){

             $products=Product::find($id);
             $products->name=$request->name
             $products->description=$request->description

             if($product->photo!=$request->photo){

                $strpos=strpos($request->photo,';');
                $sub=substr($request->photo,0,$strpos);
                $ex=explode('/',$sub)[1];
                $name=time().".".$ex;
                $img=Image::make($request->photo)->resize(200,200);
                $upload_path=public_path()."/upload/";
                $img->save($upload_path.$name);
                $image=$upload_path. $product->photo
                if(file_exists($image)){
                  @unlink($image)
                }

             }else{
               $name=$product->photo
             }
             $products->photo=$name;
             $products->type=$request->type;
             $products->quantity=$request->quantity;
             $products->price=$request->price;
             $products->save();

            }

}
