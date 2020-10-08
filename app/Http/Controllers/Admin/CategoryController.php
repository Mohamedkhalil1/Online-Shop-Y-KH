<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryValidation;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $categories = Category::select('id','name')->paginate(10);
            return view('admin.categories.index',compact('categories'));
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
            return view('admin.categories.create');
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
    public function store(CategoryValidation $request)
    {
        try{
            $params = $request->only('name');
            Category::create($params);
            return redirect()->route('admin.categories')->with(['success' => trans('admin/messages.success_add')]);
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
            $category = Category::findOrFail($id);
            return view('admin.categories.edit',compact('category'));
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
    public function update(CategoryValidation $request, $id)
    {
        try{
            $params = $request->only('name');
            Category::findOrFail($id)->update($params);
            return redirect()->route('admin.categories')->with(['success' => trans('admin/messages.success_update')]);
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
            Category::findOrFail($id)->delete();
            return redirect()->route('admin.categories')->with(['success' => trans('admin/messages.success_delete')]);
        }catch(\Exception $ex){
            return redirect()->back()->with(['error' => trans('admin/messages.error')]);
        }
       
    }
}
