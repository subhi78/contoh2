<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Response;

class DokumenController extends Controller
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
        $dokumen = Dokumen::all();

        return view('admin.dokumen.index', compact('dokumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dokumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'file' => 'required'
            // 'file' => 'required|file|mimes:pdf,xlsx,docx,jpg,jpeg,png|max:2048',
        ]);

        // Simpan file ke penyimpanan yang diinginkan
        // $file = $request->file('file');
        // $fileName = time() . '_' . $file->getClientOriginalName();
        // $file->move(\public_path('files/'), $fileName);

        $validated = new Dokumen([
            'title' => $request->title,
            'file' => $request->file,
        ]);
        $validated->save();


        return redirect()->route('dokumen');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokumen $dokumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokumen $dokumen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokumen $dokumen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        if (File::exists("files/" . $dokumen->file)) {
            File::delete("files/" . $dokumen->file);
        }
        $dokumen->delete();
        return back();
    }

    public function download($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        $fileName = $dokumen->file;
        $filePath = public_path('file/' . $fileName);

        if (!Storage::exists($filePath)) {
            abort(404);
        }

        return back();
    }
}
