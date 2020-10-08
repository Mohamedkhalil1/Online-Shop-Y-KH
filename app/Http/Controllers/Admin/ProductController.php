<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductValidation;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $products = Product::paginate(5);
            return view('admin.products.index',compact('products'));
        }catch(\Exception $ex){
            return redirect()->back()->with(['error' => trans('admin/messages.error')]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            $categories = Category::all();
            return view('admin.products.create',compact('categories'));
        }catch(\Exception $ex){
            return redirect()->back()->with(['error' => trans('admin/messages.error')]);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductValidation $request)
    {
        try{
            $params = $request->except('_token','photo');
            $filePath = $this->uploadImage('products',$request->photo);
            $params['photo'] = $filePath;
            Product::create($params);
            return redirect()->route('admin.products')->with(['success' => trans('admin/messages.success_add')]);
        }catch(\Exception $ex){
            return redirect()->back()->with(['error' => trans('admin/messages.error')]);
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $product = Product::findOrFail($id);
            $categories = Category::all();
            return view('admin.products.edit',compact('categories','product'));
        }catch(\Exception $ex){
            return redirect()->back()->with(['error' => trans('admin/messages.error')]);
        }
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductValidation $request, $id)
    {
        try{
            $params = $request->except('_token','photo');
            if($request->photo !== null){
                $filePath = $this->uploadImage('products',$request->photo);
                $params['photo'] = $filePath;
            }
            Product::findOrFail($id)->update($params);
            return redirect()->route('admin.products')->with(['success' => trans('admin/messages.success_update')]);
        }catch(\Exception $ex){
            return redirect()->back()->with(['error' => trans('admin/messages.error')]);
        }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Product::findOrFail($id)->delete();
            return redirect()->route('admin.products')->with(['success' => trans('admin/messages.success_delete')]);
        }catch(\Exception $ex){
            return redirect()->back()->with(['error' => trans('admin/messages.error')]);
        }
      
    }
}
