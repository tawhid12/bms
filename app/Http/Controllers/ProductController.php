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
        $products = Product::with(['category','ebrochure'])->orderBy('serail', 'asc')->paginate(10);
        return view('product.index', compact('products'));
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

            if ($request->hasFile('featured_image') && $request->file('featured_image')->isValid()) {
                $file = $request->file('featured_image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/featured_image/'), $fileName);
                $product->featured_image = 'uploads/featured_image/'.$fileName;
            }

            if ($request->hasFile('featured_image_two') && $request->file('featured_image_two')->isValid()) {
                $file = $request->file('featured_image_two');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/featured_image_two/'), $fileName);
                $product->featured_image_two = 'uploads/featured_image_two/'.$fileName;
            }

            $product->title = $request->product_title?$request->product_title:' ';
            $product->category_id = $request->category_id;
            $product->tech_spec = $request->tech_spec?$request->tech_spec:' ';
            $product->product_des = $request->product_des?$request->product_des:' ';
            $product->che_res = $request->che_res?$request->che_res:' ';
            $product->pro_info = $request->pro_info?$request->pro_info:' ';
            $product->feature = $request->feature?$request->feature:' ';
            $product->srbsc = $request->srbsc?$request->srbsc:' ';
            $product->ebrochure_id = $request->ebrochure_id;
            $product->is_featured = $request->is_featured;
            $product->serial = $request->serial;
            //$c->upload_file = $fileName;


            if ($product->save()) {
                Toastr::success('Submitted Successfully!');
                return redirect()->route(currentUser() . '.product.index');
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
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $ebrochure = Ebrochure::all();
        return view('product.edit', compact('product','categories','ebrochure'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
         // dd($request);
         try {
            $product = Product::findOrFail($id);

            if ($request->hasFile('featured_image') && $request->file('featured_image')->isValid()) {
                $file = $request->file('featured_image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/featured_image/'), $fileName);
                $product->featured_image = 'uploads/featured_image/'.$fileName;
            }

            if ($request->hasFile('featured_image_two') && $request->file('featured_image_two')->isValid()) {
                $file = $request->file('featured_image_two');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/featured_image_two/'), $fileName);
                $product->featured_image_two = 'uploads/featured_image_two/'.$fileName;
            }

            $product->title = $request->product_title?$request->product_title:' ';
            $product->category_id = $request->category_id;
            $product->tech_spec = $request->tech_spec?$request->tech_spec:' ';
            $product->product_des = $request->product_des?$request->product_des:' ';
            $product->che_res = $request->che_res?$request->che_res:' ';
            $product->pro_info = $request->pro_info?$request->pro_info:' ';
            $product->feature = $request->feature?$request->feature:' ';
            $product->srbsc = $request->srbsc?$request->srbsc:' ';
            $product->ebrochure_id = $request->ebrochure_id;
            $product->is_featured = $request->is_featured;
            $product->serial = $request->serial;
            //$c->upload_file = $fileName;


            if ($product->save()) {
                Toastr::success('Submitted Successfully!');
                return redirect()->route(currentUser() . '.product.index');
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
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
