<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index()
    {
        $datapenyakit = Penyakit::latest()->get();
        return view('admin.page.datapenyakit', compact('datapenyakit'));
    }
}
