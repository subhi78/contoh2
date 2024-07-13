<?php

namespace App\Http\Controllers;

use DOMDocument;
use App\Models\Artikel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;
use App\Http\Middleware\AdminMiddleware;

class ArtikelController extends Controller
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
        $artikel = Artikel::all();
        return view('admin.artikel.index')->with('artikel', $artikel);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required'
        ]);

        // gambar
        if ($request->hasFile("gambar")) {
            $file = $request->file("gambar");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("gambar-artikel/"), $imageName);

            // description
            $description = $request->description;

            $dom = new DOMDocument();
            $dom->loadHTML($description, 9);

            $images = $dom->getElementsByTagName('img');

            foreach ($images as $key => $img) {
                $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
                $image_name = "/artikel/" . time() . $key . '.png';
                file_put_contents(public_path() . $image_name, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
            $description = $dom->saveHTML();

            $validated['excerpt'] = Str::limit(strip_tags($request->description), 100);

            $validated = new Artikel([
                "title" => $request->title,
                "excerpt" => Str::limit(strip_tags($request->description), 100),
                "description" => $description,
                "gambar" => $imageName,
            ]);
            $validated->save();
        }

        return redirect()->route('artikel');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $decryptID = Crypt::decryptString($id);
        $artikel = Artikel::findOrFail($decryptID);
        return view('admin.artikel.edit')->with('artikel', $artikel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'gambar' => 'image|nullable|max:1999'
        ]);
        $validatedData = Artikel::findOrFail($id);
        if ($request->hasFile("gambar")) {
            if (File::exists("gambar-artikel/" . $validatedData->gambar)) {
                File::delete("gambar-artikel/" . $validatedData->gambar);
            }
            $file = $request->file("gambar");
            $validatedData->gambar = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("gambar-artikel/"), $validatedData->gambar);
            $request['gambar'] = $validatedData->gambar;
        }

        $validatedData->update([
            "title" => $request->title,
            "description" => $request->description,
            "gambar" => $validatedData->gambar,
        ]);

        return redirect()->route('artikel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        if (File::exists("gambar-artikel/" . $artikel->gambar)) {
            File::delete("gambar-artikel/" . $artikel->gambar);
        }
        $artikel->delete();
        return redirect()->route('artikel');
    }

    public function deletecover($id)
    {
        $cover = Artikel::findOrFail($id)->cover;
        if (File::exists("gambar-artikel/" . $cover)) {
            File::delete("gambar-artikel/" . $cover);
        }
        return back();
    }
}
