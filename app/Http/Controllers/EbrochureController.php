<?php

namespace App\Http\Controllers;

use App\Models\Ebrochure;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;
class EbrochureController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ebrochures = Ebrochure::orderBy('serial','asc')->paginate(10);
        return view('ebrochure.index',compact('ebrochures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ebrochure.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $ebrochure = new Ebrochure;
            if ($request->has('picture'))
                $ebrochure->image = 'uploads/ebrochure/thumb/' . $this->resizeImage($request->picture, 'uploads/ebrochure', true, 256, 423, true);
            $ebrochure->title = $request->title;
            if ($request->hasFile('upload_pdf') && $request->file('upload_pdf')->isValid()) {
                $file = $request->file('upload_pdf');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/upload_pdf/'), $fileName);
                $ebrochure->upload_pdf = "uploads/upload_pdf/".$fileName;
            }
            $ebrochure->serial = $request->serial;
            if ($ebrochure->save()) {
                Toastr::success('Brochure Create Successfully!');
                return redirect()->route(currentUser() . '.ebrochure.index');
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
    public function show($eslug)
    {
        echo 'ok';die;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ebrochure=Ebrochure::findOrFail(encryptor('decrypt',$id));
        return view('ebrochure.edit',compact('ebrochure'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $ebrochure = Ebrochure::findOrFail(encryptor('decrypt',$id));
            if ($request->has('picture'))
                $ebrochure->image = 'uploads/ebrochure/thumb/' . $this->resizeImage($request->picture, 'uploads/ebrochure', true, 256, 423, true);
            $ebrochure->title = $request->title;
            if ($request->hasFile('upload_pdf') && $request->file('upload_pdf')->isValid()) {
                $file = $request->file('upload_pdf');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/upload_pdf/'), $fileName);
                $ebrochure->upload_pdf = "uploads/upload_pdf/".$fileName;
            }
            $ebrochure->serial = $request->serial;
            if ($ebrochure->save()) {
                Toastr::success('Brochure Create Successfully!');
                return redirect()->route(currentUser() . '.ebrochure.index');
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
    public function destroy(string $id)
    {
        $b= Ebrochure::findOrFail(encryptor('decrypt',$id));
        $path='uploads/ebrochure/thumb/';
        if($this->deleteImage($b->image,$path));
        $b->delete();
        Toastr::warning('Ebrochure Deleted Permanently!');
        return redirect()->back();
    }
}
