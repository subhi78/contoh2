<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Middleware\AdminMiddleware;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware(AdminMiddleware::class);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index')->with('slider', $slider);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile("gambar")) {
            $file = $request->file("gambar");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("gambar-slider/"), $imageName);

            $validated = new Slider([
                "title" => $request->title,
                "gambar" => $imageName,
            ]);
            $validated->save();
        }

        return redirect()->route('slider');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $slider = Slider::findOrFail($id);
        if (File::exists("gambar-slider/" . $slider->gambar)) {
            File::delete("gambar-slider/" . $slider->gambar);
        }
        $slider->delete();
        return back();
    }
}
