<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Faker\Provider\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\CategoriesModel;
use App\Models\ProductImageModel;
use App\Models\ProductAutoPartModel;
use App\Models\SubCategoriesModel;
use App\Models\ProductTechnicalModel;
use App\Models\ProductAddFeaturedModel;
use App\Models\ProductCarModel;
use App\Models\ProductsModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminProductDetailsController extends Controller
{
    /**-------------------------------Categories Functions------------------------------------*/
    function categories_list()
    {
        $categories = CategoriesModel::get();
        return view('admin.product-details.categories.categories-list',compact('categories'));
    }
    function categories_add()
    {
        return view('admin.product-details.categories.categories-add');
    }
    function categories_edit($id)
    {
        $categories = CategoriesModel::where('id',$id)->first();
        return view('admin.product-details.categories.categories-edit',compact('categories'));
    }
    function categories_delete(CategoriesModel $categories)
    {
        $categories->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function categories_add_edit_data(Request $request,CategoriesModel $categories)
    {
        $create = 1;
        (isset($categories->id) and $categories->id>0)?$create=0:$create=1;
        if($request->hasFile('images'))
        {
            $imageName = time().'.'.$request->images->getClientOriginalExtension();
            $request->images->move(public_path('/uploads/categories'), $imageName);
            $categories->images = $imageName;
        }
        $categories->title = $request->title;
        $categories->status = $request->status;
        $categories->save();
        if($create == 0)
        {
            return back()->with('update','Updated Successfully');
        }
        else
        {
            return back()->with('success','Added Successfully');
        }
    }

    /**-------------------------------Sub-Categories Functions------------------------------------*/
    function sub_categories_list()
    {
        $sub_categories = SubCategoriesModel::with('getcategories')->get();
        //dd($sub_categories);
        return view('admin.product-details.sub-categories.sub-categories-list',compact('sub_categories'));
    }
    function sub_categories_add()
    {
        $parent_categories = CategoriesModel::where('status','1')->orderBy('id','ASC')->get();
        return view('admin.product-details.sub-categories.sub-categories-add',compact('parent_categories'));
    }
    function sub_categories_edit($id)
    {
        $parent_categories = CategoriesModel::where('status','1')->orderBy('id','ASC')->get();
        $sub_categories = SubCategoriesModel::with('getcategories')->where('id',$id)->first();
        return view('admin.product-details.sub-categories.sub-categories-edit',compact('sub_categories','parent_categories'));
    }
    function sub_categories_delete(SubCategoriesModel $sub_categories)
    {
        $sub_categories->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function sub_categories_add_edit_data(Request $request,SubCategoriesModel $sub_categories)
    {
        $create = 1;
        (isset($sub_categories->id) and $sub_categories->id>0)?$create=0:$create=1;
        $sub_categories->title = $request->title;
        $sub_categories->parent_category = $request->parent_category;
        $sub_categories->status = $request->status;
        $sub_categories->save();
        if($create == 0)
        {
            return back()->with('update','Updated Successfully');
        }
        else
        {
            return back()->with('success','Added Successfully');
        }
    }

    /**-------------------------------Product Autopart Functions------------------------------------*/
    function products_list()
    {
        $products = ProductsModel::with('images_take1','get_product_autoparts')->where('parent_cat_id' , 1)->get();
        return view('admin.product-details.products.products-list',compact('products'));
        
    }
    function products_add()
    {
        $sub_categories = SubCategoriesModel::where('status','1')->where('parent_category', 1)->orderBy('id','ASC')->get();
        return view('admin.product-details.products.products-add',compact('sub_categories'));
    }
    function products_edit($id)
    {
        $sub_categories = SubCategoriesModel::where('status','1')->orderBy('id','ASC')->get();
        $products = ProductsModel::with('get_product_autoparts')->where('id',$id)->first();
        
        $product_images = ProductImageModel::where('product_id',$id)->get();
        return view('admin.product-details.products.products-edit',compact('products','sub_categories','product_images'));
    }
    function products_delete(ProductsModel $products)
    {
        $products->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function products_add_edit_data(ProductsModel $products , Request $request)
    {
        
        $create = 1;
        (isset($products->id) and $products->id>0)?$create=0:$create=1;
        $products->categories_id = $request->sub_categories;
        $products-> parent_cat_id = 1;
        $products->title = $request->title;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->stock = $request->stock;
        $products->sku = $request->sku;
        $products->status = $request->status;
            $products->save();

        
       
            $autoparts = ProductAutopartModel::where('product_id',$products->id)->first();
            if($autoparts){
            $autoparts->speed  = $request->speed;
            $autoparts->powersource  = $request->powersource;
            $autoparts->battery_cell_type  = $request->battery_cell_type;
            $autoparts->voltage  = $request->voltage;
            $autoparts->battery_capacity  = $request->battery_capacity;        
            $autoparts->save();
        }
        else{
            
            $autoparts = new ProductAutopartModel();
            $autoparts->product_id   = $products->id;
            $autoparts->speed  = $request->speed;
            $autoparts->powersource  = $request->powersource;
            $autoparts->battery_cell_type  = $request->battery_cell_type;
            $autoparts->voltage  = $request->voltage;
            $autoparts->battery_capacity  = $request->battery_capacity;        
            $autoparts->save();
        }
        
        /***saving multiple image file */
        if($request->hasFile('images'))
        {
            /***for deleting old images*/
                $getimage = ProductImageModel::where('product_id',$products->id)->get();
                foreach($getimage as $imageget){
                    $imageget->delete();
                    }
                    /***for uploading new images*/
                    foreach ($request->images as $image)
                {
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('/uploads/products'), $imageName);
                    /** Store a new images for products */
                    $storeImage = new ProductImageModel();
                    $storeImage->title          = $imageName;
                    $storeImage->product_id     = $products->id;
                    $storeImage->save();
                }
            }
            if($create == 0)
            {
                return back()->with('update','Updated Successfully');
            }
            else
            {
                return back()->with('success','Added Successfully');
            }
        }
        
        /**-------------------------------Product CARS Functions------------------------------------*/
        
        
        function products_cars_list()
        {   $products = ProductsModel::with('images_take1','get_product_cars')->where('parent_cat_id' , 6)->get();
            return view('admin.product-details.product-cars.products-list',compact('products'));
    }
    function products_cars_add()
    {
        $sub_categories = SubCategoriesModel::where('status','1')->where('parent_category', 6)->orderBy('id','ASC')->get();
        return view('admin.product-details.product-cars.products-add',compact('sub_categories'));
    }
    function products_cars_edit($id)
    {
        $sub_categories = SubCategoriesModel::where('status','1')->orderBy('id','ASC')->get();
        $products = ProductsModel::with('get_product_submodel', 'get_technical')->where('id',$id)->first();
        $product_add_featured = ProductAddFeaturedModel::where('product_id',$id)->get();
        $product_images = ProductImageModel::where('product_id',$id)->get();
        return view('admin.product-details.product-cars.products-edit',compact('products','sub_categories','product_images','product_add_featured'));
    }
    function products_cars_delete(ProductsModel $products)
    {
        $products->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function products_cars_add_edit_data(ProductsModel $products , Request $request)
    {   
    //    dd($request->all());
         $create = 1;
        (isset($products->id) and $products->id>0)?$create=0:$create=1;
        $products->categories_id = $request->sub_categories;
        $products->parent_cat_id = 6;
        $products->title = $request->title;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->stock = $request->stock;
        $products->sku = $request->sku;
        $products->status = $request->status;
        $products->save();
        $cars = ProductCarModel::where('product_id',$products->id)->first();
        if($cars){
            $cars->year  = $request->year;
            $cars->condition  = $request->condition;
            $cars->body  = $request->body;
            $cars->mileage  = $request->mileage;
            $cars->fuel_type  = $request->fuel_type;        
            $cars->engine  = $request->engine;        
            $cars->transmission  = $request->transmission;        
            $cars->exterior_color  = $request->exterior_color;        
            $cars->interior_color  = $request->interior_color;        
            $cars->registered  = $request->registered;        
            $cars->vin_number  = $request->vin_number;        
            $cars->stock_id  = $request->stock_id;        
            $cars->price_description  = $request->price_description;    
            $cars->save();
        }
        else{
            $cars = new ProductCarModel();
            $cars->product_id   = $products->id;
            $cars->year  = $request->year;
            $cars->condition  = $request->condition;
            $cars->body  = $request->body;
            $cars->mileage  = $request->mileage;
            $cars->fuel_type  = $request->fuel_type;        
            $cars->engine  = $request->engine;        
            $cars->transmission  = $request->transmission;        
            $cars->exterior_color  = $request->exterior_color;        
            $cars->interior_color  = $request->interior_color;        
            $cars->registered  = $request->registered;        
            $cars->vin_number  = $request->vin_number;   
            $cars->stock_id  = $request->stock_id;        
            $cars->price_description  = $request->price_description;    
            $cars->save();
        }
        $technical = ProductTechnicalModel::where('product_id',$products->id)->first();
        if($technical){
            if($request->tec_featured){
                $technical->engine_no_of_cylinder  = $request->engine_no_cyclinder;
                $technical->engine_displacement  = $request->engine_displacement;
                $technical->engine_drive_layout  = $request->engine_drive_layout;
                $technical->engine_horespower  = $request->engine_horespower;
                $technical->engine_rpm  = $request->engine_rpm;
                $technical->engine_torque  = $request->engine_torque;        
                $technical->engine_compression_ratio  = $request->engine_compression_ratio;        
                $technical->performance_top_track_speed  = $request->perfomance_top_track_speed;        
                $technical->performance_mph  = $request->perfomance_mph;        
                $technical->transmission_type  = $request->transamission_type;        
                $technical->transmission_displacement  = $request->transamission_displacement;           
                $technical->save();
            }
        }
        else{
            if($request->tec_featured){
            $technical = new ProductTechnicalModel();
            $technical->product_id   = $products->id;
            $technical->engine_no_of_cylinder  = $request->engine_no_cyclinder;
            $technical->engine_displacement  = $request->engine_displacement;
            $technical->engine_drive_layout  = $request->engine_drive_layout;
            $technical->engine_horespower  = $request->engine_horespower;
            $technical->engine_rpm  = $request->engine_rpm;
            $technical->engine_torque  = $request->engine_torque;        
            $technical->engine_compression_ratio  = $request->engine_compression_ratio;        
            $technical->performance_top_track_speed  = $request->perfomance_top_track_speed;        
            $technical->performance_mph  = $request->perfomance_mph;        
            $technical->transmission_type  = $request->transamission_type;        
            $technical->transmission_displacement  = $request->transamission_displacement;           
            $technical->save();
            }
        }

        $featured = ProductAddFeaturedModel::where('product_id',$products->id)->first();
        if($featured){
            if($request->add_featured[0] != null){
                $get_feat = ProductAddFeaturedModel::where('product_id',$products->id)->get();
                    foreach($get_feat as $value){
                        $value->delete();
                    }
                foreach($request->add_featured as $key=>$value)
                {       
                        $featured = new ProductAddFeaturedModel();
                        $featured->product_id = $products->id;
                        $featured->title = $request->add_featured[$key];
                        $featured->save();
                }
            }
        }
        else{
            if($request->add_featured[0] != null){
                foreach($request->add_featured as $key=>$value)
                {
                    $featured = new ProductAddFeaturedModel();
                        $featured->product_id = $products->id;
                        $featured->title = $request->add_featured[$key];
                        $featured->save();
                }
            }
        }
        
            /***saving multiple image file */
            if($request->hasFile('images'))
            {
                /***for deleting old images*/
                $getimage = ProductImageModel::where('product_id',$products->id)->get();
                    foreach($getimage as $imageget){
                        $imageget->delete();
                    }
                /***for uploading new images*/
                foreach ($request->images as $image)
                {
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('/uploads/products'), $imageName);
                    /** Store a new images for products */
                    $storeImage = new ProductImageModel();
                    $storeImage->title          = $imageName;
                    $storeImage->product_id     = $products->id;
                    $storeImage->save();
                }
            }
            if($create == 0)
            {
                return back()->with('update','Updated Successfully');
            }
            else
            {
                return back()->with('success','Added Successfully');
            }
        }
}
