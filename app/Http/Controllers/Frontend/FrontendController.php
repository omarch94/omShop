<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        //take() make a delay time to give the user more time to see the image
        $featured_products=Product::where('trending','1')->take(15)->get();
        $trending_category=Category::where('popular','1')->take(15)->get();
        $products=Product::all();
        return view('frontend.index',compact('featured_products','trending_category','products'));
    }
    public function category()
    {
        $category =Category::where('status','1')->get();
        return view('frontend.category',compact('category'));

    }
     public function viewcategory($slug)
     {
         if(Category::where('slug',$slug)->exists())
         {
            $category=Category::where('slug',$slug)->first();
            $products=Product::where('cate_id', $category->id)->where('status','0')->get();
            return view('frontend.products.index',compact('category','products'));
         }
         else
         {
             return redirect('/')->with('status',"Slug dosen't exists");
         }
     }
     public function productview($cate_slug,$prod_slug)
     {
        if(Category::where('slug',$cate_slug)->exists())
        {
            if(Product::where('slug',$prod_slug)->exists())
            {
                $products=Product::where('slug',$prod_slug)->first();
                $ratings=Rating::where('prod_id',$products->id)->get();
                $rating_sum=Rating::where('prod_id',$products->id)->sum('stars_rated');
               

                if($ratings->count()>0)
                {
                    $rating_value=$rating_sum/$ratings->count();
                }
                else
                {
                    $rating_value=0;
                }
                return view('frontend.products.view',compact('products','ratings','rating_value'));


            }
            else{
                return redirect('/')->with('status',"The link is broken");

            }
        }
        else{
            return redirect('/')->with('status',"No such category found");

        }
     }

     public function product_details($id){

        $products = Product::find($id);
 
         return view('frontend.products.viewone',compact('products'));
     }
    //  public function product_search(Request $request)
    //  {
    //      $search_text = $request->search;
     
    //      $products = Product::where('name', 'LIKE', '%' . $search_text . '%')
    //          ->orWhere('description', 'LIKE', '%' . $search_text . '%')
    //          ->paginate(6);
     
    //      return view('frontend.index', compact('products'));
    //  }
}
