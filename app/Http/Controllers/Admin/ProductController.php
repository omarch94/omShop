<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;

use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    
    public function index()
    {
        $products =Product::all();
        return view('admin.product.index',compact('products'));
    }
    public function add(){
        $category=Category::all();
        return view('admin.product.add',compact('category'));
    }
    public function insert(Request $request)
    {
        $products =new Product();
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('assets/uploads/products/',$filename);
            $products->image=$filename;
        }
        $products->cate_id=$request->input('cate_id');
        $products->name=$request->input('name');
        $products->slug=$request->input('slug');
        $products->small_description=$request->input('small_description');
        $products->description=$request->input('description'); 
        $products->original_price=$request->input('original_price'); 
        $products->selling_price=$request->input('selling_price');
        $products->tax=$request->input('tax');
        $products->qty=$request->input('qty');
        $products->status=$request->input('status')==TRUE? '1':'0';
        $products->trending=$request->input('trending')==TRUE? '1':'0';   
        $products->meta_title=$request->input('meta_title');
        $products->meta_description=$request->input('meta_description');
        $products->meta_keywords=$request->input('meta_keywords');
        $products->save();
        return redirect('products')->with('status','WOW! Product added successuflly');
    }

    public function edit($id)
    {
        $products =Product::find($id);
        return view('admin.product.edit',compact('products'));
    }

    public function update(Request $request,$id)
    {
        $products= Product::find($id);
        if($request->hasFile('image'))
        {
            $path= 'assets/uploads/products/'.$products->image;
        
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('assets/uploads/products/',$filename);
            $products->image=$filename;
        }
        $products->name=$request->input('name');
        $products->slug=$request->input('slug');
        $products->small_description=$request->input('small_description');
        $products->description=$request->input('description'); 
        $products->original_price=$request->input('original_price'); 
        $products->selling_price=$request->input('selling_price');
        $products->tax=$request->input('tax');
        $products->qty=$request->input('qty');
        $products->status=$request->input('status')==TRUE? '1':'0';
        $products->trending=$request->input('trending')==TRUE? '1':'0';   
        $products->meta_title=$request->input('meta_title');
        $products->meta_description=$request->input('meta_description');
        $products->meta_keywords=$request->input('meta_keywords');
        $products->update();
        return redirect('products')->with('status','WOW! Product Updated successuflly');

    }

    public function delete($id){
        $products =Product::find($id);
        if($products->image)
        {
            $path= 'assets/uploads/products/'.$products->image;
        
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $products->delete();
        return redirect('products')->with('status','WOW! product deleted successuflly');

    }


        /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ProductsImport,request()->file('file'));
               
        return back();
    }
}
