<?php

namespace App\Http\Controllers;

use DOMDocument;
use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Middleware\AdminMiddleware;

class AgendaController extends Controller
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
        $agenda = Agenda::all();
        return view('admin.agenda.index')->with('agenda', $agenda);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.agenda.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                $validated = $request->validate([
                    'title' => 'required|string|max:255',
                    'lokasi' => 'required|string',
                    'tanggal' => 'required|date',
                    'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                // gambar
                if ($request->hasFile("gambar")) {
                    $file = $request->file("gambar");
                    $imageName = time() . '_' . $file->getClientOriginalName();
                    $file->move(\public_path("poster/"), $imageName);
        
                    // lokasi
                    $description = $request->lokasi;
        
                    $dom = new DOMDocument();
                    $dom->loadHTML($description, 9);
        
                    $images = $dom->getElementsByTagName('img');
        
                    foreach ($images as $key => $img) {
                        $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
                        $image_name = "/agenda/" . time() . $key . '.png';
                        file_put_contents(public_path() . $image_name, $data);
        
                        $img->removeAttribute('src');
                        $img->setAttribute('src', $image_name);
                    }
                    $description = $dom->saveHTML();
        
                    $validated = new Agenda([
                        "title" => $request->title,
                        "tanggal" => $request->tanggal,
                        "lokasi" => $description,
                        "gambar" => $imageName
                    ]);
                    $validated->save();
                }
                return redirect()->route('agenda');

    }

    /**
     * Display the specified resource.
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agenda $agenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agenda $agenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $posts = Agenda::findOrFail($id);
        if (File::exists("poster/" . $posts->poster)) {
            File::delete("poster/" . $posts->poster);
        }
        $posts->delete();
        return back();
    }
}
