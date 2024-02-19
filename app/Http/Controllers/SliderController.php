<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class SliderController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate(10);
        return view('slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
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
            $slider = new Slider;
            if ($request->has('picture'))
                $slider->image = 'uploads/slide_image/thumb/' . $this->resizeImage($request->picture, 'uploads/slide_image', true, 1366, 768, true);
            $slider->link = $request->link;
            $slider->short_title = $request->short_title;
            $slider->long_title = $request->long_title;
            if ($slider->save()) {
                Toastr::success('Slider Create Successfully!');
                return redirect()->route(currentUser() . '.slider.index');
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
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail(encryptor('decrypt', $id));
        return view('slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $slider = Slider::findOrFail(encryptor('decrypt', $id));

            if ($request->has('picture') && $request->picture)
                if ($this->deleteImage($slider->image))
                    $slider->image = 'uploads/slide_image/thumb/' . $this->resizeImage($request->picture, 'uploads/slide_image', true, 1366, 768, true);
            $slider->link = $request->link;
            $slider->short_title = $request->short_title;
            $slider->long_title = $request->long_title;
            if ($slider->save()) {
                Toastr::success('Slider Update Successfully!');
                return redirect()->route(currentUser() . '.slider.index');
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
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Slider::findOrFail(encryptor('decrypt', $id));
        $path = 'uploads/Slide_image/thumb/';
        if ($this->deleteImage($cat->image, $path));
        $cat->delete();
        Toastr::warning('Slider Deleted Permanently!');
        return redirect()->back();
    }
}
