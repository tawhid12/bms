<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class CategoryController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $c = new Category;
            $c->cat_name = $request->cat_name;
            if ($request->has('upload_file'))
                $c->upload_file = 'uploads/categories/thumb/'.$this->resizeImage($request->upload_file, 'uploads/categories', true, 285, 373, true);
            if ($c->save()) {
                Toastr::success('Category Successfully!');
                return redirect()->route(currentUser() . '.category.index');
            } else {
                Toastr::warning('Please try Again!');
                return redirect()->back();
            }
        } catch (Exception $e) {
            Toastr::warning('Please try Again!');
            // dd($e);
            return back()->withInput();
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
    */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c=Category::findOrFail(encryptor('decrypt',$id));
        return view('category.edit',compact('c'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $c=Category::findOrFail(encryptor('decrypt',$id));
            $c->cat_name = $request->cat_name;
            $path='uploads/categories';
            $dpath='uploads/categories/thumb/';
            if($request->has('upload_file') && $request->upload_file){
                if($this->deleteImage($c->upload_file,$dpath)){
                    $c->upload_file=$this->resizeImage($request->upload_file,$path,true,285,373,true);
                }
                $c->upload_file = 'uploads/categories/thumb/'.$this->resizeImage($request->upload_file, 'uploads/categories', true, 285, 373, true);
            }
            if($c->save()){
            Toastr::success('Category Updated Successfully!');
            return redirect()->route(currentUser().'.category.index');
            } else{
             Toastr::warning('Please try Again!');
             return redirect()->back();
            }
            
        }
        catch (Exception $e){
            Toastr::warning('Please try Again!');
            // dd($e);
            return back()->withInput();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c= Category::findOrFail(encryptor('decrypt',$id));
        $path='uploads/categories/thumb/';
        if($this->deleteImage($c->image,$path));
        $c->delete();
        Toastr::warning('Category Deleted Permanently!');
        return redirect()->back();
    }
}
