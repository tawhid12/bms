<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Ebrochure;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $ebrochure = Ebrochure::all();
        return view('product.create', compact('categories','ebrochure'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        try {
            $product = new Product;

            if ($request->file('featured_image')->isValid()) {
                $file = $request->file('featured_image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/featured_image/'), $fileName);
                $product->featured_image = $fileName;
            }

            $product->title = $request->product_title;
            $product->category_id = $request->category_id;
            $product->tech_spec = $request->tech_spec;
            $product->featured_image = 1;
            $product->product_des = $request->product_des;
            $product->che_res = $request->product_title;
            $product->pro_info = $request->product_title;
            $product->feature = $request->product_title;
            $product->srbsc = $request->product_title;
            $product->ebrochure_id = $request->ebrochure_id;
            //$c->upload_file = $fileName;
            $product->save();

            if ($product->save()) {
                Toastr::success('Submitted Successfully!');
                return redirect()->back();
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
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
