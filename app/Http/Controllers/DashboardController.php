<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Agenda;
use App\Models\Slider;
use App\Models\Artikel;
use App\Models\Dokumen;
use App\Models\Image;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $slider = Slider::latest()->take(2)->get();
        $agenda = Dokumen::latest()->get();
        $artikel = Artikel::latest()->take(3)->get();
        $entries = Post::latest()->take(5)->get();

        $images = collect();

        foreach ($entries as $entry) {
            // Mengambil 2 foto dari setiap entri
            $entryPhotos = $entry->images()->limit(2)->get();

            // Menambahkan hasil ke dalam koleksi
            $images = $images->merge($entryPhotos);
        }
        return view('dashboard.index', compact('slider', 'agenda', 'artikel', 'images'));
    }
    public function about()
    {
        return view('dashboard.aboutus');
    }
    public function denah()
    {
        return view('dashboard.denahunw');
    }
    public function struktur()
    {
        return view('dashboard.struktur');
    }
    public function galeri()
    {
        $entries = Post::latest()->take(5)->get();

        $images = collect();

        foreach ($entries as $entry) {
            // Mengambil 2 foto dari setiap entri
            $entryPhotos = $entry->images()->limit(2)->get();

            // Menambahkan hasil ke dalam koleksi
            $images = $images->merge($entryPhotos);
        }
        return view('dashboard.galeri', compact('images', 'entries'));
    }
    public function dokumen()
    {
        return view('dashboard.download');
    }
}