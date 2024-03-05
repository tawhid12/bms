<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class BrandController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Category::paginate(10);
        return view('category.index', compact('brands'));
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
            $b = new Category;
            if ($request->has('Picture'))
                $b->image = $this->resizeImage($request->Picture, 'uploads/categories', true, 254, 143, true);
           
            if ($b->save()) {
                Toastr::success('Brand Uploaded Successfully!');
                return redirect()->route(currentUser() . '.brand.index');
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
        $c=Cateogry::findOrFail(encryptor('decrypt',$id));
        return view('category.edit',compact('b'));
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
            $c=category::findOrFail(encryptor('decrypt',$id));

            $path='uploads/categories';
            $dpath='uploads/categories/thumb/';
            if($request->has('Picture') && $request->Picture)
            if($this->deleteImage($c->image,$dpath))
                $c->image=$this->resizeImage($request->Picture,$path,true,254,143,true);
            if($c->save()){
            Toastr::success('Brand Update Successfully!');
            return redirect()->route(currentUser().'.brand.index');
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
