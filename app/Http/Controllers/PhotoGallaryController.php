<?php

namespace App\Http\Controllers;

use App\Models\photoGallary;
use App\Models\year;
use App\Models\photoGallaryCategory;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;
use Exception;
use DB;
class PhotoGallaryController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $images = photoGallary::where('photo_gallary_category_id',$request->gid)->get()->toArray();
        foreach($images as $image){
            $tableImages[] = $image['feature_image'];
        }
        $data=array();
        $storeFolder = public_path('uploads/pGgallery');
        $file_path = public_path('uploads/pGgallery/');
        $files = scandir($storeFolder);
        foreach ( $files as $file ) {
            if ($file !='.' && $file !='..' && in_array($file,$tableImages)) {       
                $obj['name'] = $file;
                $file_path = public_path('uploads/pGgallery/').$file;
                $obj['size'] = filesize($file_path);          
                $obj['path'] = url('public/uploads/pGgallery/'.$file);
                $data[] = $obj;
            }
        }
        //dd($data);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $file_name= $filename.'-'.time().'.'.$extension;
        $image->move(public_path('uploads/pGgallery'),$file_name);
            
        $imageUpload = new photoGallary;
        $imageUpload->Caption = " ";
        $imageUpload->photo_gallary_category_id=$request->album;
        $imageUpload->status = 1;
        $imageUpload->feature_image = $file_name;
        $imageUpload->save();
        return response()->json(['success'=>$file_name]);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\photoGallary  $photoGallary
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pGalleryCat= encryptor('decrypt',$id);
        return view('pGallery.photo',compact('pGalleryCat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\photoGallary  $photoGallary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\photoGallary  $photoGallary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }
    public function delete(Request $request){
        $filename =  $request->get('filename');
        photoGallary::where('feature_image',$filename)->delete();
        $path = public_path('uploads/pGgallery/').$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return response()->json(['success'=>$filename]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\photoGallary  $photoGallary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    public function productGallery(Request $request)
    {
        $images = DB::table('product_images')->where('product_id', $request->id)->get();
        foreach ( $images as $file ) {
                $obj['name'] = $file->image;
                $file_path = public_path().'/'.$file->image;
                $obj['size'] = filesize($file_path);          
                $obj['path'] = url('public/'.$file->image);
                $obj['id'] = $file->id;
                $data[] = $obj;
        }
        //dd($data);
        return response()->json($data);
    }
    public function product_photo_show($id)
    {
        //$pGalleryCat = DB::table('product_images')->where('product_id', encryptor('decrypt', $id))->get();
        //return view('pGallery.product-photo',compact('pGalleryCat'));
        $id = encryptor('decrypt', $id);
        return view('pGallery.product-photo',compact('id'));
    }
    public function product_photo_upload(Request $request)
    {
        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $file_name = $filename . '-' . time() . '.' . $extension;
        $image->move(public_path('uploads/product_images'), $file_name);



        $imageUpload = new ProductImage;
        $imageUpload->product_id = $request->product_id;
        $imageUpload->image = 'uploads/product_images/'.$file_name;
        $imageUpload->save();
        return response()->json(['success' => $file_name]);
    }

    public function product_photo_delete(Request $request){
        $data = DB::table('product_images')->where('id',$request->get('id'))->first();
        if($data){
            $path = public_path().'/'.$data->image;
            if (file_exists($path)) {
                unlink($path);
            }
            DB::table('product_images')->where('id', $request->get('id'))->delete();
        }
        return response()->json(['success'=>$data->image]); 
    }
}
