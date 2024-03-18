<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $career = Career::paginate(10);
        return view('career.index', compact('career'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('career.create');
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
            $c = new Career;
            $c->car_title =$request->car_title;
            $c->car_des =$request->car_des;
            $c->unpulished_date = date('Y-m-d', strtotime($request->unpublished_date));
            if ($request->hasFile('upload_file') && $request->file('upload_file')->isValid()) {
                $file = $request->file('upload_file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/career/'), $fileName);
                $c->upload_file = 'uploads/career/'.$fileName;
            }
            
                if ($c->save()) {
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
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career = Career::find($id);
        return view('career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $c = Career::findOrFail($id);
            $c->car_title =$request->car_title;
            $c->car_des =$request->car_des;
            $c->unpulished_date = date('Y-m-d', strtotime($request->unpublished_date));
            if ($request->hasFile('upload_file') && $request->file('upload_file')->isValid()) {
                $file = $request->file('upload_file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/career/'), $fileName);
                $c->upload_file = 'uploads/career/'.$fileName;
            }
            
                if ($c->save()) {
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        //
    }
}
