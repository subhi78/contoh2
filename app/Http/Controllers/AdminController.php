<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AdminMiddleware;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin', AdminMiddleware::class]);
    }

    public function index()
    {
        return view('admin.index');
    }
    public function profil()
    {
        return view('admin.profil.index');
    }
}
